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
    public function No2Action(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no2.xls');

        $phql = "select amp.name, q.description, 
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


        $phql = "select question.id, amphur.name,  sum(answer2558.answer) y2558,  sum(answer2559.answer) y2559 
        from 
            Clinic\Model\DiscoverySurvey discovery_survey 
            left join Clinic\Model\Answer answer2558 on (answer2558.discovery_surveyid = discovery_survey.id and discovery_survey.surveyid = 3) 
            left join Clinic\Model\Answer answer2559 on (answer2559.discovery_surveyid = discovery_survey.id and discovery_survey.surveyid = 1) 
            join Clinic\Model\Question question on (question.id = answer2558.questionid or question.id = answer2559.questionid) 
            left join Clinic\Model\Office office on (office.id = discovery_survey.officeid) 
            left join Clinic\Model\Amphur amphur on (office.amphurid = amphur.id)
        group by  question.id, amphur.name";
       // where 
       //     question.id = 26 

        $data = $this->modelsManager->executeQuery($phql);
        $result = [];
        foreach($data as $r => $dataRow) {
            $result[$dataRow["id"]][$dataRow["name"]]['name'] =  $dataRow["name"];
            $result[$dataRow["id"]][$dataRow["name"]]['y2558'] =  $dataRow["y2558"];
            $result[$dataRow["id"]][$dataRow["name"]]['y2559'] =  $dataRow["y2559"];
        }
        //var_dump( $result );
        //die();
        $baseRow = 7;
        $row = 0;
        
        
        for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->insertNewRowBefore($row+1,1);
        }

        $data = $result[26];

        // var_dump( $data );
        // die();

        $baseRow = 7;
        $row = 0;
        $r=0;
        foreach($data as  $dataRow) {
        //for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('B'.$row, $dataRow["name"])
                                        ->setCellValue('C'.$row, $dataRow["y2558"])
                                        ->setCellValue('D'.$row, $dataRow["y2559"]);
            $r+=1;
        }

        $data = $result[28];
        $baseRow = 7;
        $row = 0;
        $r=0;

        foreach($data as  $dataRow) {
        //for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('E'.$row, $dataRow["y2558"])
                                        ->setCellValue('F'.$row, $dataRow["y2559"]);
            $r+=1;
        }


        $data = $result[30];
        $baseRow = 7;
        $row = 0;
        $r=0;

        foreach($data as  $dataRow) {
        //for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('G'.$row, $dataRow["y2558"])
                                        ->setCellValue('H'.$row, $dataRow["y2559"]);
            $r+=1;
        }


        $data = $result[32];
        $baseRow = 7;
        $row = 0;
        $r=0;

        foreach($data as  $dataRow) {
        //for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('I'.$row, $dataRow["y2558"])
                                        ->setCellValue('J'.$row, $dataRow["y2559"]);
            $r+=1;
        }

        //สะพาน
        $data = $result[35];
        $baseRow = 7;
        $row = 0;
        $r=0;

        foreach($data as  $dataRow) {
        //for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('K'.$row, $dataRow["y2558"])
                                        ->setCellValue('L'.$row, $dataRow["y2559"]);
            $r+=1;
        }
        /*
        $data = $result[36];
        $baseRow = 7;
        $row = 0;
        $r=0;

        foreach($data as  $dataRow) {
        //for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('M'.$row, $dataRow["y2558"])
                                        ->setCellValue('N'.$row, $dataRow["y2559"]);
            $r+=1;
        }
        */
        /*
        foreach($data as $r => $dataRow) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->insertNewRowBefore($row+1,1);
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('B'.$row, $dataRow["name"])
                                        ->setCellValue('C'.$row, $dataRow["y2558"])
                                        ->setCellValue('D'.$row, $dataRow["y2559"]);
        }
        */
        $objPHPExcel->getActiveSheet()->removeRow($row+1,1);
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo2_',$this->tmp_file);
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