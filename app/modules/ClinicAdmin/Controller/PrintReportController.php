<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2016 Suebtas Limsaihua (http://www.it.mut.ac.th)
 * @author Suebtas Limsaihua <suebtas@mut.ac.th>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use PhpOffice\PhpWord;
//use PHPExcel;

use PHPExcel\PHPExcel_IOFactory;// as PHPExcel_IOFactory;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Shared\Converter;
use Clinic\Model\Answer;
use Clinic\Model\DiscoverySurvey;
use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Clinic\Model\BoundaryOffice;
use Clinic\Model\BoundaryTambon;
use Clinic\Model\Tambon;
use Clinic\Model\Amphur;
use Clinic\Model\Survey;


class PrintReportController extends Controller
{

    public function initialize()
    {
        
        $this->setAdminEnvironment();
        $this->view->languages_disabled = true;
/*
        $this->surveyid = $this->session->get('surveyid');
      	$this->discoverySurveyid = $this->session->get('discovery_surveyid');
      	//echo $this->discoverySurvey->id."--".$discovery_surveyid;

      	$this->discoverySurvey =  DiscoverySurvey::findFirst($this->discoverySurveyid);
      	$this->year = $this->discoverySurvey->Survey->no;*/

        $auth = $this->session->get('auth');
        $this->user = AdminUser::findFirst($auth->id);
        $this->view->office =  Office::findFirst($this->user->officeid);


    }
    public function indexAction(){
        
        $this->view->disable();
    }

    public $tmp_file = 'data/cache/FormNoTMP.xlsx';

    public function No3Action(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no3.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo3_',$this->tmp_file);
    }


    public function No4Action(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no4.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo4_',$this->tmp_file);
    }

    public function No5Action(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no5.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo5_',$this->tmp_file);
    }

    public function No6Action(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no6.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo6_',$this->tmp_file);
    }


    public function No7Action(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no7.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo7_',$this->tmp_file);
    }

    public function No8Action(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no8.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo8_',$this->tmp_file);
    }

    public function No9Action(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no9.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo9_',$this->tmp_file);
    }

    public function ExtendAction(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_extend.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNoExtend_',$this->tmp_file);
    }

    public function No2Action($currentYear){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no2.xls');
        if(!is_numeric($currentYear))
            exit();
        $currentServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$currentYear)));
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  (int)$currentYear - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;
        
       /* $phql = "select amp.name, q.description, 
                    case ds.surveyid when 1 then sum(a.answer) end y2559,
                    case ds.surveyid when 2 then sum(a.answer) end y2558
                    from Clinic\Model\Answer a, 
                        Clinic\Model\DiscoverySurvey ds, 
                        Clinic\Model\Office o, 
                        Clinic\Model\Amphur amp, 
                        Clinic\Model\Question q
                    where 
                        a.discovery_surveyid = ds.id and 
                        o.id = ds.officeid and o.id and 
                        o.amphurid = amp.id and 
                        q.id = a.questionid and 
                        ds.surveyid = 1 and
                        a.questionid = 26
                    group by ds.surveyid, a.questionid, amp.name,q.description";

        */
        
        $phql = "select question.id, amphur.name,  sum(answer2558.answer) y2558,  sum(answer2559.answer) y2559 
            from 
                Clinic\Model\DiscoverySurvey discovery_survey 
                left join Clinic\Model\Answer answer2558 on (answer2558.discovery_surveyid = discovery_survey.id and discovery_survey.surveyid = $previousServeyID) 
                left join Clinic\Model\Answer answer2559 on (answer2559.discovery_surveyid = discovery_survey.id and discovery_survey.surveyid = $currentServeyID ) 
                join Clinic\Model\Question question on (question.id = answer2558.questionid or question.id = answer2559.questionid) 
                left join Clinic\Model\Office office on (office.id = discovery_survey.officeid) 
                left join Clinic\Model\Amphur amphur on (office.amphurid = amphur.id)
            group by  question.id, amphur.name";
       // where 
       //     question.id = 26 

        $accumulate_r=0;
        $data = $this->modelsManager->executeQuery($phql, array("lastYear"=>$previousServeyID, "currentYear"=>$currentServeyID));
        $result = [];
        foreach($data as $r => $dataRow) {
            //result[อำเภอ][id]{  [y2558]=> y2558, [y2559]=> 2559   }
            $result[$dataRow["name"]][$dataRow["id"]] = array('y2558'=>$dataRow["y2558"], 'y2559'=>$dataRow["y2559"]);
        }
        $baseRow = 7 + $accumulate_r;
        $row = 0;
            
        for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->insertNewRowBefore($row+1,1);
        }
        $accumulate_r += $r;

        $baseRow = 7;
        $row = 0;
        $r=0;
        foreach($result as $key => $dataRow) {
            $row = $baseRow + $r;
            
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('B'.$row, $key)
                                        ->setCellValue('C'.$row, $dataRow[26]["y2558"])
                                        ->setCellValue('D'.$row, $dataRow[26]["y2559"])
                                        ->setCellValue('E'.$row, $dataRow[28]["y2558"])
                                        ->setCellValue('F'.$row, $dataRow[28]["y2559"])
                                        ->setCellValue('G'.$row, $dataRow[30]["y2558"])
                                        ->setCellValue('H'.$row, $dataRow[30]["y2559"])
                                        ->setCellValue('I'.$row, $dataRow[33]["y2558"])
                                        ->setCellValue('J'.$row, $dataRow[33]["y2559"])
                                        ->setCellValue('K'.$row, $dataRow[35]["y2558"])
                                        ->setCellValue('L'.$row, $dataRow[35]["y2559"]);
            $r+=1;
        }
        $phql = "select question.id, amphur.name amphur_name, office.name office_name, sum(answer2558.answer) y2558,  sum(answer2559.answer) y2559 
            from 
                Clinic\Model\DiscoverySurvey discovery_survey 
                left join Clinic\Model\Answer answer2558 on (answer2558.discovery_surveyid = discovery_survey.id and discovery_survey.surveyid = $previousServeyID) 
                left join Clinic\Model\Answer answer2559 on (answer2559.discovery_surveyid = discovery_survey.id and discovery_survey.surveyid = $currentServeyID ) 
                join Clinic\Model\Question question on (question.id = answer2558.questionid or question.id = answer2559.questionid) 
                left join Clinic\Model\Office office on (office.id = discovery_survey.officeid) 
                left join Clinic\Model\Amphur amphur on (office.amphurid = amphur.id)
            group by  question.id, amphur.name, office.name";

        $data = $this->modelsManager->executeQuery($phql, array("lastYear"=>$previousServeyID, "currentYear"=>$currentServeyID));
        $result = [];
        foreach($data as $dataRow) {
            //result[อำเภอ][อบท][id]{  [y2558]=> y2558, [y2559]=> 2559   }
            $result[$dataRow["amphur_name"]][$dataRow["office_name"]][$dataRow["id"]] = 
                array( 'y2558' => $dataRow["y2558"], 'y2559' =>  $dataRow["y2559"]);
        }

        $r = $this->setFormNo2($objPHPExcel, 15, $accumulate_r, $result, "อำเภอเมือง");
        $accumulate_r += $r;

        $r = $this->setFormNo2($objPHPExcel, 24, $accumulate_r, $result, "อำเภอแกลง");
        $accumulate_r += $r;

        $r = $this->setFormNo2($objPHPExcel, 32, $accumulate_r, $result, "อำเภอบ้านค่าย");
        $accumulate_r += $r;

        $r = $this->setFormNo2($objPHPExcel, 41, $accumulate_r, $result, "อำเภอบ้านฉาง");
        $accumulate_r += $r;

        $r = $this->setFormNo2($objPHPExcel, 50, $accumulate_r, $result, "อำเภอปลวกแดง");
        $accumulate_r += $r;

        $r = $this->setFormNo2($objPHPExcel, 59, $accumulate_r, $result, "อำเภอวังจันทร์");
        $accumulate_r += $r;
        
        $r = $this->setFormNo2($objPHPExcel, 68, $accumulate_r, $result, "อำเภอเขาชะเมา");
        $accumulate_r += $r;

        $r = $this->setFormNo2($objPHPExcel, 77, $accumulate_r, $result, "อำเภอนิคมพัฒนา");
        $accumulate_r += $r;

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo2_',$this->tmp_file);
    }
    public function setFormNo2($objPHPExcel, $atRow, $accumulate_r ,$result, $amphurName){
        $baseRow = $atRow + $accumulate_r;
        $row = 0;
        $amphur = Amphur::findByName($amphurName)->getFirst();
        for($r=0;$r<=$amphur->office->count();$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->insertNewRowBefore($row+1,1);
        }
        $objPHPExcel->getActiveSheet()->removeRow($row+1,1);

        $data = $result[$amphurName];
        $accumulate_r += $r;
        $row = 0;
        $r=0;
        foreach($data as $key =>  $dataRow) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('B'.$row, $key)
                                        ->setCellValue('C'.$row, $dataRow[26]["y2558"])
                                        ->setCellValue('D'.$row, $dataRow[26]["y2559"])
                                        ->setCellValue('E'.$row, $dataRow[28]["y2558"])
                                        ->setCellValue('F'.$row, $dataRow[28]["y2559"])
                                        ->setCellValue('G'.$row, $dataRow[30]["y2558"])
                                        ->setCellValue('H'.$row, $dataRow[30]["y2559"])
                                        ->setCellValue('I'.$row, $dataRow[33]["y2558"])
                                        ->setCellValue('J'.$row, $dataRow[33]["y2559"])
                                        ->setCellValue('K'.$row, $dataRow[35]["y2558"])
                                        ->setCellValue('L'.$row, $dataRow[35]["y2559"]);
            $r+=1;
        }
        return $r;
    }
    public function TestNo1Action()
    {
        $this->view->disable();
        // New Word document
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
        // Define styles
        $phpWord->addTitleStyle(1, array('size' => 14, 'bold' => true), array('keepNext' => true, 'spaceBefore' => 240));
        $phpWord->addTitleStyle(2, array('size' => 14, 'bold' => true), array('keepNext' => true, 'spaceBefore' => 240));
        // 2D charts
        $section = $phpWord->addSection();

        /*
        $section->addTextBreak();
        // Add object
        $section->addObject(__DIR__.'/../Form/_sheet.xls');
        */

        $section->addTitle('2D charts', 1);
        $section = $phpWord->addSection(array('colsNum' => 2, 'breakType' => 'continuous'));
        $chartTypes = array('pie', 'doughnut', 'bar', 'column', 'line', 'area', 'scatter', 'radar');
        $twoSeries = array('bar', 'column', 'line', 'area', 'scatter', 'radar');
        $threeSeries = array('bar', 'line');
        $categories = array('A', 'B', 'C', 'D', 'E');
        $series1 = array(1, 3, 2, 5, 4);
        $series2 = array(3, 1, 7, 2, 6);
        $series3 = array(8, 3, 2, 5, 4);
        foreach ($chartTypes as $chartType) {
            $section->addTitle(ucfirst($chartType), 2);
            $chart = $section->addChart($chartType, $categories, $series1);
            $chart->getStyle()->setWidth(Converter::inchToEmu(2.5))->setHeight(Converter::inchToEmu(2));
            if (in_array($chartType, $twoSeries)) {
                $chart->addSeries($categories, $series2);
            }
            if (in_array($chartType, $threeSeries)) {
                $chart->addSeries($categories, $series3);
            }
            $section->addTextBreak();
        }
        // 3D charts
        $section = $phpWord->addSection(array('breakType' => 'continuous'));
        $section->addTitle('3D charts', 1);
        $section = $phpWord->addSection(array('colsNum' => 2, 'breakType' => 'continuous'));
        $chartTypes = array('pie', 'bar', 'column', 'line', 'area');
        $multiSeries = array('bar', 'column', 'line', 'area');
        $style = array('width' => Converter::cmToEmu(5), 'height' => Converter::cmToEmu(4), '3d' => true);
        foreach ($chartTypes as $chartType) {
            $section->addTitle(ucfirst($chartType), 2);
            $chart = $section->addChart($chartType, $categories, $series1, $style);
            if (in_array($chartType, $multiSeries)) {
                $chart->addSeries($categories, $series2);
                $chart->addSeries($categories, $series3);
            }
            $section->addTextBreak();
        }

  		//$document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo1.docx');
  		//$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo2.docx');
  		//var_dump(($document));die();
  		date_default_timezone_set('Asia/Bangkok');

  		$tmp_file = 'FormNoTMP.docx';
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');

        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo1_',$this->tmp_file);
		
    }

    public function index2Action()
    {
        
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/30template.xls');
        //echo date('H:i:s') , " Add new data to the template" , EOL;
        $data = array(array('title'		=> 'Excel for dummies',
                            'price'		=> 17.99,
                            'quantity'	=> 2
                        ),
                    array('title'		=> 'PHP for dummies',
                            'price'		=> 15.99,
                            'quantity'	=> 1
                        ),
                    array('title'		=> 'Inside OOP',
                            'price'		=> 12.95,
                            'quantity'	=> 1
                        )
                    );
        $objPHPExcel->getActiveSheet()->setCellValue('D1', \PHPExcel_Shared_Date::PHPToExcel(time()));
        $baseRow = 5;
        foreach($data as $r => $dataRow) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('B'.$row, $dataRow['title'])
                                        ->setCellValue('C'.$row, $dataRow['price'])
                                        ->setCellValue('D'.$row, $dataRow['quantity'])
                                        ->setCellValue('E'.$row, '=C'.$row.'*D'.$row);
        }
        $objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);

  	 	$this->converttoexceltemplate('FormNo1_',$this->tmp_file);


		
    }
    	
	public function converttowordtemplate($name,$temp_file){		
		// Save file
		$fname = $name. date("d.m.Y-H.i") . ".docx";
		$response = new \Phalcon\Http\Response();

		// Redirect output to a client’s web browser (Excel2007)
		$response->setHeader('Content-Type', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
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
	public function converttoexceltemplate($name, $temp_file){		
		// Save file
		$fname = $name. date("d.m.Y-H.i") . ".xlsx";
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