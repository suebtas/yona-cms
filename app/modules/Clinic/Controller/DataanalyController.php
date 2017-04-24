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
use PhpOffice\PhpWord;
use Phalcon\Mvc\Model\Resultset;

class DataanalyController extends FormController
{
    public $tmp_file = 'data/cache/FormNoTMP.xlsx';
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
            $message = "";
            if($this->request->getPost("Query") OR  $this->request->getPost("Report"))
            {
                $sess = $this->request->getPost("Sessiones");
                $quest = $this->request->getPost("Questions");
                $con1 = $this->request->getPost("Condition1");
                $con2 = $this->request->getPost("Condition2");
                $val1 = $this->request->getPost("txtcon1");
                $val2 = $this->request->getPost("txtcon2");
                $val3 = $this->request->getPost("txtcon3");
                $logic1 = $this->request->getPost("Logic1");

                $query = true;
                    
                if($years == 0)
                {
                    $query = false;
                    $message = "กรุณาเลือกปีสำรวจ";
                }
                if($val3 == "")
                {
                    
                    //die($years);
                    if($sess == 0)
                    {
                        $query = false;
                        $message = $message . "\nกรุณาเลือกข้อคำถามหลัก";
                    }

                    if($quest == 0)
                    {
                        $query = false;
                        $message = $message . "\nกรุณาเลือกข้อคำถามย่อย";
                    }
                    else
                         $this->view->questid = $quest;

                    if($con1 == "เลือกเงื่อนไข 1" OR $val1 == "")
                    {
                        $query = false;
                        $message = $message . "\nกรุณาเลือกเงื่อนไข 1 หรือ ใส่ค่าเปรียบเทียบเงื่อนไข 1";
                    }
                    
                    //die($logic1);
                    if($logic1 == "AND" OR $logic1 == "OR")
                    {
                        if($con2 == "เลือกเงื่อนไข 2" OR $val2 == "")
                        {
                            $query = false;
                            $message = $message . "\nกรุณาเลือกเงื่อนไข 2 หรือ ใส่ค่าเปรียบเทียบเงื่อนไข 2";
                        }
                        
                    }
                    
                    //die($quest);
                    $this->view->questid = $quest;
                    $this->view->con1 = $con1;
                    $this->view->val1 = $val1;
                    $this->view->con2 = $con2;
                    $this->view->val2 = $val2;
                    $this->view->val3 = $val3;
                    $this->view->logic1 = $logic1;
                }
                
                $this->view->val3 = $val3;

                //die($con2);

                if($query == true)
                {
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
                        $sql =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND A.answer ".$con1." ".$val1." ".$logic1." A.answer ".$con2." ".$val2." AND D.surveyid = {$Survey->id} ORDER BY O.name";

                        if($Survey2 != null)
                            $sql2 =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where questionid = ".$quest." AND A.answer ".$con1." ".$val1." ".$logic1." A.answer ".$con2." ".$val2." AND D.surveyid = {$Survey2->id} ORDER BY O.name";
                    }
                    //die($sql);
                    if($val3 != null AND $val3 != "")
                    {

                        $sql =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where A.answer LIKE '%".$val3."%' AND D.surveyid = {$Survey->id} ORDER BY O.name";

                        if($Survey2 != null)
                            $sql2 =  "SELECT A.discovery_surveyid, O.name, O.amphurid, A.answer FROM Clinic\Model\Answer A LEFT JOIN Clinic\Model\DiscoverySurvey D ON D.id = A.discovery_surveyid LEFT JOIN Clinic\Model\Office O ON D.officeid = O.id Where A.answer LIKE '%".$val3."%' AND D.surveyid = {$Survey2->id} ORDER BY O.name";
                        
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
                else
                {
                    $this->view->message = $message;
                }

                

            }
            $result = [];
            foreach($data as $item){
                //array['xxx1' => array[2559=>10,2558=>10]]
                //array['xxx2' => array[2559=>10,2558=>10]]
                //array['xxx1'][] = [2559=>10,2558=>10]
                //array['xxx1'][] = [2559=>10,2558=>10]
                $result[$item->name][$year1] = $item->answer;
            }

            if (is_array($data2) || is_object($data2))
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

            
            if (is_array($data2) || is_object($data2))
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

        if($this->request->getPost("Report"))
        {
                $message = $message . "\nออกรายงาน";
                $this->view->message = __DIR__.'/../views/dataanaly/FormAnalyReport.docx';


                $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
                $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormAnalyReport.docx');
                //$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo2.docx');
                //var_dump(($document));die();
                date_default_timezone_set('Asia/Bangkok');

                $document->setValue('{year}', $years);

                $document->cloneRow('No', count($result));
                $document->cloneRow('no', count($amphurs));

                $document->setValue('{year1}', $year1);
                $document->setValue('{year2}', $year2);

                $i = 1;
                //var_dump($result);
                //die();
                foreach($result as $key=>$item)
                {
                    $document->setValue('No#'.$i, $i);
                    $document->setValue('Off#'.$i, $key);
                    
                    $document->setValue('New#'.$i, str_replace("&nbsp;","",$item[$year1]) );
               
                    if(isset($item[$year2]))
                        $document->setValue('Old#'.$i, str_replace("&nbsp;","",$item[$year2]));
                    else
                        $document->setValue('Old#'.$i, "");
                    
                    $i++;
                }
                //die();

                $i = 1;
                foreach($amphurs as $item)
                {
                    $document->setValue('no#'.$i, $i);
                    $document->setValue('pro#'.$i, $item->name);
                    $document->setValue('cNew#'.$i, $this->toformatNumber2($countAmphs[$item->id]));
                    $document->setValue('cOld#'.$i,  $this->toformatNumber2($countAmphs2[$item->id]));
                    $i++;
                }

                $d = strtotime("today");
                $today = date("Y-m-d",$d);
                $document->setValue('{date}', $this->getTHdate($today));
                //var_dump(($data));die();
                //$document->setValue('S'.$work['Day'].'#'.$index, $work['Status']);

                $result = $document->saveAs($this->tmp_file);   
                $this->converttowordtemplate('FormAnalyReport_',$this->tmp_file);

                die();

        }



        
    }

    function toformatNumber($number)
    {
        $number = str_replace(",", "", $number);
        if($number == null)
            return "";
        else
            return number_format($number, 2, ".",",");;
    }

    function toformatNumber2($number)
    {
        $number = str_replace(",", "", $number);
        if($number == null)
            return "";
        else
            return number_format($number, 0, ".",",");;
    }

    public function getTHdate($eDate)
	{
		//$cdate =  explode(" ", $eDate);
		
		$cdate2 = explode("-", $eDate);
		
		$thdate = $cdate2[2];
		switch($cdate2[1])
		{
			case 1 : $thdate = $thdate . " " . "มกราคม "; break;
			case 2 : $thdate = $thdate . " " . "กุมภาพันธ์ "; break;
			case 3 : $thdate = $thdate . " " . "มีนาคม "; break;
			case 4 : $thdate = $thdate . " " . "เมษายน "; break;
			case 5 : $thdate = $thdate . " " . "พฤษภาคม "; break;
			case 6 : $thdate = $thdate . " " . "มิถุนายน "; break;
			case 7 : $thdate = $thdate . " " . "กรกฎาคม "; break;
			case 8 : $thdate = $thdate . " " . "สิงหาคม "; break;
			case 9 : $thdate = $thdate . " " . "กันยายน "; break;
			case 10 : $thdate = $thdate . " " . "ตุลาคม "; break;
			case 11 : $thdate = $thdate . " " . "พฤศจิกายน "; break;
			case 12 : $thdate = $thdate . " " . "ธันวาคม "; break;
		}
		
			$thdate = $thdate .( $cdate2[0]+543);
		
		return $thdate;
	}

    public function converttowordtemplate($name,$temp_file){		
		// Save file
		$fname = $name. date("d.m.Y-H.i") . ".docx";
		$response = new \Phalcon\Http\Response();

		// Redirect output to a client’s web browser (Excel2007)
		$response->setHeader('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		$response->setHeader('Content-Disposition', 'attachment;filename="' . $fname . '"');
		$response->setHeader('Cache-Control', 'max-age=0');

		// If you're serving to IE 9, then the following may be needed
		$response->setHeader('Cache-Control', 'max-age=1');

		//Set the content of the response
		$response->setContent(file_get_contents($temp_file));
		// delete temp file
		//unlink($temp_file);

		$response->setStatusCode(200, "OK");
		//Return the response
		$response->send();
	}

}