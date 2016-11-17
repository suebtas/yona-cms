<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Session;
use Clinic\Model\Answer;
use Clinic\Model\Question;
use Clinic\Model\Survey;
use Clinic\Model\DiscoverySurvey;
use Clinic\Model\Office;
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

        if($this->request->isPost())
        {
            //die();
            $session = $this->request->getPost("Sessiones");
            $this->view->questions = Question::find("sessionid = {$session}");
            $this->view->sessid = $session;

            $years = $this->request->getPost("Years");

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
                $con3 = $this->request->getPost("Condition3");
                $val1 = $this->request->getPost("txtcon1");
                $val2 = $this->request->getPost("txtcon2");
                $val3 = $this->request->getPost("txtcon3");
                $logic1 = $this->request->getPost("Logic1");
                $logic2 = $this->request->getPost("Logic2");

                //die($con2);

                $Survey = Survey::findFirst("no = '{$years}'");
                $discovery_survey = DiscoverySurvey::find("surveyid = {$Survey->id}");

                //$office['id'][]=

                if(count($discovery_survey) >0)
                {
                    foreach($discovery_survey as $dis)
                    {
                        //if($news->status == 1)
                            $readIDs[] = $dis->id;
                            //$office['id'][] = $dis->id;
                            //$office['name'][] = $dis->office->name;
                    }       
                    $readSurveyIDs = implode(",",$readIDs);
                    //var_dump($office);
                    //die();
                    
                }

                if($logic1 == "0" AND $logic2 == "0")
                {
                    $sql =  "SELECT A.discovery_surveyid, O.name, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND answer ".$con1." ".$val1." AND discovery_surveyid in ($readSurveyIDs) ORDER BY O.name";
                    
                }
                elseif($logic1 != "0" AND $logic2 == "0")
                {
                    $sql =  "SELECT A.discovery_surveyid, O.name, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND answer ".$con1." ".$val1." ".$logic1." answer ".$con2." ".$val2." AND discovery_surveyid in ($readSurveyIDs) ORDER BY O.name";
                }
                elseif($logic1 != "0" AND $logic2 != "0")
                {
                    $sql =  "SELECT A.discovery_surveyid, O.name, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND (answer ".$con1." ".$val1." ".$logic1." answer ".$con2." ".$val2.") ".$logic2." answer ".$con3." ".$val3." AND discovery_surveyid in ($readSurveyIDs) ORDER BY O.name";
                }
                //die($sql);
                
                //var_dump($data);
                //die($con2);
                /*if ($this->modelsManager->executeQuery($sql)) {
                    //die("not save");
                    foreach ($news->getMessages() as $message) {
                        $this->flash->error(sprintf(self::$messageFail,$message));
                    }

                    return $this->dispatcher->forward(array(
                        "controller" => "dataanaly",
                        "action" => "index"
                    ));
                    }*/
                $data = $this->modelsManager->executeQuery($sql);
            

                $this->view->questid = $quest;
                $this->view->con1 = $con1;
                $this->view->val1 = $val1;
                $this->view->con2 = $con2;
                $this->view->val2 = $val2;
                $this->view->con3 = $con3;
                $this->view->val3 = $val3;
                $this->view->logic1 = $logic1;
                $this->view->logic2 = $logic2;

            }
            $this->view->datas = $data;

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

        //var_dump($this->view->entries);
        //die();
    }

}