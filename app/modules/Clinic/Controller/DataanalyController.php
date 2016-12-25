<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Condition;
use Clinic\Model\Session;
use Clinic\Model\Answer;
use Clinic\Model\Question;
use Clinic\Model\Survey;
use Clinic\Model\DiscoverySurvey;
use Clinic\Model\Office;
use Clinic\Model\Amphur;
use Phalcon\Mvc\Model\Resultset;

class DataanalyController extends FormController
{

    public function initialize()
    {
        date_default_timezone_set('asia/bangkok');

        $auth = $this->session->get('auth');
        $this->user = AdminUser::findFirst($auth->id);

        $this->setClinicEnvironment();
        $this->assets = $this->getDI()->get('assets');
        $this->assets->collection('modules-clinic-css')->setLocal(true)
            ->addFilter(new \Application\Assets\Filter\Less())
            ->setTargetPath(ROOT . '/assets/modules-clinic.css')
            ->setTargetUri('assets/modules-clinic.css')
            ->join(true)
            ->addCss(APPLICATION_PATH . '/modules/Clinic/assets/clinic.css');
        //$this->setAdminEnvironment();
        $this->view->languages_disabled = true;

        // Clinic JS Assets
        $this->assets->collection('modules-clinic-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic.js')
            ->setTargetUri('assets/modules-clinic.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/clinic.js');



        //กำหนดค่าใน view
        $this->view->user = $this->user;
        $this->view->office =  Office::findFirst($this->user->officeid);
    }

    public function indexAction()
    {


        $this->view->sessiones = Session::find([
            "order" => "id ASC"
        ]);

        $conditons = Condition::find("status = 1");
        $this->view->conditions = $conditons;

        //var_dump($conditons);
        //die();

        if($this->request->isPost())
        {
            //die();
            $session = $this->request->getPost("Sessiones");
            $questions = Question::find("sessionid = {$session}");
            $this->view->questions = $questions;
            $this->view->sessid = $session;

            $years = $this->request->getPost("Years");

            //die(count($questions));

            if($years != "")
            {
                $tmpyear = explode("/", $years);
                $year1 = $tmpyear[1];
                $year2 = $tmpyear[1]-1;

            }
            else
            {
                $year1 = "XXXX";
                $year2 = "YYYY";
                $years = 0;
            }
            

            $this->view->year1 = $year1;
            $this->view->year2 = $year2;
            $this->view->year = $years;
            $data = null;
            if($this->request->getPost("Query"))
            {
                $sess = $this->request->getPost("Sessiones");
                $quest = $this->request->getPost("Questions");
                $con1 = $this->request->getPost("Condition1");
                $con2 = $this->request->getPost("Condition2");
                $val1 = $this->request->getPost("txtcon1");
                $val2 = $this->request->getPost("txtcon2");
                $val3 = $this->request->getPost("txtcon3");
                $logic1 = $this->request->getPost("Logic1");

                //die($con2);

                $Survey = Survey::findFirst("no = '{$years}'");

                $Survey2 = Survey::findFirst("no = '1/{$year2}'");

                
                if($logic1 == "0")
                {
                    $sql =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND A.answer ".$con1." ".$val1." AND D.surveyid = {$Survey->id} ORDER BY O.name";

                    if($Survey2 != null)
                        $sql2 =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND A.answer ".$con1." ".$val1." AND D.surveyid = {$Survey2->id} ORDER BY O.name";
                    
                }
                elseif($logic1 != "0")
                {
                    $sql =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND A.answer ".$con1." ".$val1." ".$logic1." A.answer ".$con2." ".$val2." AND discovery_surveyid in ($readSurveyIDs) ORDER BY O.name";

                    if($discovery_survey2 != null)
                        $sql2 =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND A.answer ".$con1." ".$val1." ".$logic1." A.answer ".$con2." ".$val2." AND discovery_surveyid2 in ($readSurveyIDs) ORDER BY O.name";
                }
                //die($sql);
                if($val3 != null AND $val3 != "")
                {
                    if($quest != null AND $quest != "")
                    {
                        $sql =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND A.answer LIKE '%".$val3."%' AND discovery_surveyid in ($readSurveyIDs) ORDER BY O.name";

                        if($discovery_survey2 != null)
                            $sql2 =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND A.answer LIKE '%".$val3."%' AND discovery_surveyid2 in ($readSurveyIDs) ORDER BY O.name";
                    }
                    
                }
                                
                $data = $this->modelsManager->executeQuery($sql);

                if($Survey2 != null)
                    $data2 = $this->modelsManager->executeQuery($sql2);
                else
                    $data2 = null;
            

                $this->view->questid = $quest;
                $this->view->con1 = $con1;
                $this->view->val1 = $val1;
                $this->view->con2 = $con2;
                $this->view->val2 = $val2;
                $this->view->val3 = $val3;
                $this->view->logic1 = $logic1;

            }
            $result = [];
            foreach($data as $item){
                //array['xxx1' => array[2559=>10,2558=>10]]
                //array['xxx2' => array[2559=>10,2558=>10]]
                //array['xxx1'][] = [2559=>10,2558=>10]
                //array['xxx1'][] = [2559=>10,2558=>10]
                $result[$item->name][$year1] = $item->answer;
            }


            foreach($data2 as $item){
                //array['xxx1' => array[2559=>10,2558=>10]]
                //array['xxx2' => array[2559=>10,2558=>10]]
                //array['xxx1'][] = [2559=>10,2558=>10]
                //array['xxx1'][] = [2559=>10,2558=>10]
                $result[$item->name][$year2] = $item->answer;
            }
            
            $this->view->test = $result;
            $amphurs = Amphur::find();
            foreach($amphurs as $amphur){
                $countAmphs[$amphur->id] = 0;
                $countAmphs2[$amphur->id] = 0;
            }
            foreach($data as $d)
            {
                $countAmphs[$d->amphurid]++;
            }


            foreach($data2 as $d)
            {
                $countAmphs2[$d->amphurid]++;
            }

            $this->view->datas = $data;
            $this->view->datas2 = $data2;
            $this->view->amphurs = $amphurs;
            $this->view->countAmphs = $countAmphs;
            $this->view->countAmphs2 = $countAmphs2;

        }
        else
        {
            $this->view->questions = Question::find("sessionid = 1");
            $this->tag->setDefault("Questions", 1);

            $this->view->year1 = "XXXX";
            $this->view->year2 = "YYYY";
            $this->view->year = 0;

        }

        
        //Question::find(["order" => "id ASC"  ]);

        $this->view->years = Survey::find([
            "order" => "id DESC"
        ]);

        
    }

}