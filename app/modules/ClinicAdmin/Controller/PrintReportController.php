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
use Clinic\Model\GroupSession;



class PrintReportController extends Controller
{

    public function initialize()
    {
        
        $this->setClinicEnvironment();
        $this->view->languages_disabled = true;

        $this->assets = $this->getDI()->get('assets');
        $this->assets->collection('modules-clinic-css')->setLocal(true)
            ->addFilter(new \Application\Assets\Filter\Less())
            ->setTargetPath(ROOT . '/assets/modules-clinic.css')
            ->setTargetUri('assets/modules-clinic.css')
            ->join(true)
            ->addCss(APPLICATION_PATH . '/modules/Clinic/assets/clinic.css');

        
        // Clinic JS Assets
        $this->assets->collection('modules-clinic-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic.js')
            ->setTargetUri('assets/modules-clinic.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/clinic.js');
            
        $auth = $this->session->get('auth');
        $this->user = AdminUser::findFirst($auth->id);

        //กำหนดค่าใน view
        $this->view->user = $this->user;
        $this->view->office =  Office::findFirst($this->user->officeid);


    }
    public function indexAction(){
        $this->view->years = Survey::find([
            "order" => "id DESC"
        ]);
        $this->view->groupSession = GroupSession::find();
    }

    public $tmp_file = 'data/cache/FormNoTMP.xlsx';

    public function No1Action(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no1.xls');
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo1_',$this->tmp_file);
    }

    public function No3Action($serveyID){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no3.xls');
        if(!is_numeric($serveyID))
            exit();
        $currentServey = Survey::findFirst($serveyID);
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  ((int)substr($currentServey->no,2)) - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;

        $resultSummary = $this->getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID);
        $result = $this->getAllAmphurAnswerByQuestionID($currentServeyID, $previousServeyID);

        //Sheet 0: รวมรายได้เฉลี่ย
        $accumulate_r=0;
        /*
            $baseRow = 6 + $accumulate_r;
            $row = 0;
                
            for($r=0;$r<8;$r++) {
                $row = $baseRow + $r;
                $objPHPExcel->setActiveSheetIndex(0)->insertNewRowBefore($row+1,1);
            }
            
            $accumulate_r += $r;

            $baseRow = 6;
            $row = 0;
            $r=0;
            foreach($resultSummary as $key => $dataRow) {
                $row = $baseRow + $r;
                
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $r+1)
                                            ->setCellValue('B'.$row, $key)
                                            ->setCellValue('C'.$row, $dataRow[57]["y2558"])
                                            ->setCellValue('D'.$row, $dataRow[57]["y2559"]);
                $r+=1;
            }
        */
        
        $questions = array(array('QuestionID'=>57,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')));

        $objPHPExcel->setActiveSheetIndex(0);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 6, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $amphurs = array(
            array("อำเภอเมือง",17),
            array("อำเภอแกลง",26),
            array("อำเภอบ้านค่าย",34),
            array("อำเภอบ้านฉาง",48),
            array("อำเภอปลวกแดง",65),
            array("อำเภอวังจันทร์",79),
            array("อำเภอเขาชะเมา",96),
            array("อำเภอนิคมพัฒนา",114),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur รายได้เฉลี่ยประชากร
        foreach($amphurs as $amphur){
            $displayColumns = array(array('QuestionID'=>57,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')));
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }
        

        $questions = array(
            array('QuestionID'=>65,'ColumnID'=>array('C'=>'y2559'))
            );
        $objPHPExcel->setActiveSheetIndex(1);
        $accumulate_r = 0;
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 5, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;
        

        $amphurs = array(
            array("อำเภอเมือง",16),
            array("อำเภอแกลง",23),
            array("อำเภอบ้านค่าย",29),
            array("อำเภอบ้านฉาง",42),
            array("อำเภอปลวกแดง",60),
            array("อำเภอวังจันทร์",74),
            array("อำเภอเขาชะเมา",91),
            array("อำเภอนิคมพัฒนา",109),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur โรงแรม
        foreach($amphurs as $amphur){
            $displayColumns = array(array('QuestionID'=>65,'ColumnID'=>array('C'=>'y2559')));
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }
        $sheets = array(
            2=>array("อำเภอเมือง",6),
            3=>array("อำเภอแกลง",6),
            4=>array("อำเภอบ้านค่าย",6),
            5=>array("อำเภอบ้านฉาง",6),
            6=>array("อำเภอปลวกแดง",6),
            7=>array("อำเภอวังจันทร์",6),
            8=>array("อำเภอเขาชะเมา",6),
            9=>array("อำเภอนิคมพัฒนา",6),
        );// array(index เลข worksheet index , อำเภอ และ แสดงผลแถวที่ 6 )
        foreach($sheets as $key => $amphur){
            $objPHPExcel->setActiveSheetIndex($key);
            $accumulate_r = 0;            
            //set amphur รายได้เฉลี่ยประชากร            
            $displayColumns = array(array('QuestionID'=>57,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')));
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        
        }


        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo3_',$this->tmp_file);
    }


    public function No4Action($serveyID){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no4.xls');


        if(!is_numeric($serveyID))
            exit();
        $currentServey = Survey::findFirst($serveyID);
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  ((int)substr($currentServey->no,2)) - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;

        $resultSummary = $this->getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID);
        $result = $this->getAllAmphurAnswerByQuestionID($currentServeyID, $previousServeyID);

        //Sheet 0: ประชากร
        $accumulate_r=0;


        $questions = array(
            array('QuestionID'=>553,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),//1.2.1   จำนวนประชากรทั้งหมด
            array('QuestionID'=>17,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')), //1.2.6.1 ประชากรแฝงจำนวน
            array('QuestionID'=>74,'ColumnID'=>array('G'=>'y2558','H'=>'y2559'))//4.1     จำนวนชุมชน  
        );
        $objPHPExcel->setActiveSheetIndex(0);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 6, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $amphurs = array(
            array("อำเภอเมือง",17),
            array("อำเภอแกลง",24),
            array("อำเภอบ้านค่าย",30),
            array("อำเภอบ้านฉาง",49),
            array("อำเภอปลวกแดง",73),
            array("อำเภอวังจันทร์",92),
            array("อำเภอเขาชะเมา",116),
            array("อำเภอนิคมพัฒนา",141),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 
        foreach($amphurs as $amphur){
            $displayColumns = array(
                array('QuestionID'=>553,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),//1.2.1   จำนวนประชากรทั้งหมด
                array('QuestionID'=>17,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')), //1.2.6.1 ประชากรแฝงจำนวน
                array('QuestionID'=>74,'ColumnID'=>array('G'=>'y2558','H'=>'y2559'))//4.1     จำนวนชุมชน  
            );
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }
        

        //Sheet 1
        $accumulate_r=0;

        $questions = array(
            array('QuestionID'=>113,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),//4.5.1.3.5   จำนวนนักเรียน ระดับก่อนประถมศึกษา
            array('QuestionID'=>133,'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),//4.5.2.3.5   จำนวนนักเรียน ระดับประถมศึกษา
            array('QuestionID'=>153,'ColumnID'=>array('K'=>'y2558','L'=>'y2559')),//4.5.3.3.5    จำนวนนักเรียน ระดับมัธยม

            array('QuestionID'=>118,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),//4.5.1.4.5   จำนวนครู ระดับก่อนประถมศึกษา
            array('QuestionID'=>138,'ColumnID'=>array('I'=>'y2558','J'=>'y2559')),//4.5.2.4.5   จำนวนครู ระดับประถมศึกษา
            array('QuestionID'=>158,'ColumnID'=>array('M'=>'y2558','N'=>'y2559')) //4.5.3.4.5   จำนวนครู ระดับมัธยม
            
        );
        $objPHPExcel->setActiveSheetIndex(1);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 7, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $amphurs = array(
            array("อำเภอเมือง",18),
            array("อำเภอแกลง",26),
            array("อำเภอบ้านค่าย",34),
            array("อำเภอบ้านฉาง",52),
            array("อำเภอปลวกแดง",75),
            array("อำเภอวังจันทร์",94),
            array("อำเภอเขาชะเมา",117),
            array("อำเภอนิคมพัฒนา",141),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 
        foreach($amphurs as $amphur){
            $displayColumns = array(
                array('QuestionID'=>113,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),//4.5.1.3.5   จำนวนนักเรียน ระดับก่อนประถมศึกษา
                array('QuestionID'=>133,'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),//4.5.2.3.5   จำนวนนักเรียน ระดับประถมศึกษา
                array('QuestionID'=>153,'ColumnID'=>array('K'=>'y2558','L'=>'y2559')),//4.5.3.3.5    จำนวนนักเรียน ระดับมัธยม

                array('QuestionID'=>118,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),//4.5.1.4.5   จำนวนครู ระดับก่อนประถมศึกษา
                array('QuestionID'=>138,'ColumnID'=>array('I'=>'y2558','J'=>'y2559')),//4.5.2.4.5   จำนวนครู ระดับประถมศึกษา
                array('QuestionID'=>158,'ColumnID'=>array('M'=>'y2558','N'=>'y2559')) //4.5.3.4.5   จำนวนครู ระดับมัธยม
            );
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo4_',$this->tmp_file);
    }

    public function No5Action($serveyID){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no5.xls');


        if(!is_numeric($serveyID))
            exit();
        $currentServey = Survey::findFirst($serveyID);
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  ((int)substr($currentServey->no,2)) - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;

        $resultSummary = $this->getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID);
        $result = $this->getAllAmphurAnswerByQuestionID($currentServeyID, $previousServeyID);

        //Sheet 0: บุคลากรทางการแพทย์
        $accumulate_r=0;



        $questions = array(            
            array('QuestionID'=>array(503,513,523,533),'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
            //5.3.1.1   แพทย์โรงพยาบาลประจำจังหวัด
            //5.3.2.1   แพทย์โรงพยาบาลประจำอำเภอ
            //5.3.3.1   แพทย์โรงพยาบาลส่งเสริมสุขภาพตำบล
            //5.3.4.1   แพทย์โรงพยาบาลเอกชน
            array('QuestionID'=>array(504,514,524,534),'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
            //5.3.1.2   พยาบาลโรงพยาบาลประจำจังหวัด
            //5.3.2.2   พยาบาลโรงพยาบาลประจำอำเภอ
            //5.3.3.2   พยาบาลโรงพยาบาลส่งเสริมสุขภาพตำบล
            //5.3.4.2   พยาบาลโรงพยาบาลเอกชน
            array('QuestionID'=>array(505,515,525,535),'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),
            //5.3.1.3   ทันตแพทย์โรงพยาบาลประจำจังหวัด
            //5.3.2.3   ทันตแพทย์โรงพยาบาลประจำอำเภอ
            //5.3.3.3   ทันตแพทย์โรงพยาบาลส่งเสริมสุขภาพตำบล
            //5.3.4.3   ทันตแพทย์โรงพยาบาลเอกชน
            array('QuestionID'=>array(506,516,526,536),'ColumnID'=>array('I'=>'y2558','J'=>'y2559')),
            //5.3.1.4   เภสัชกรโรงพยาบาลประจำจังหวัด
            //5.3.2.4   เภสัชกรโรงพยาบาลประจำอำเภอ
            //5.3.3.4   เภสัชกรโรงพยาบาลส่งเสริมสุขภาพตำบล
            //5.3.4.4   เภสัชกรโรงพยาบาลเอกชน

            array('QuestionID'=>array(511,521,531,541),'ColumnID'=>array('K'=>'y2558','L'=>'y2559')),
            //5.3.1.9   อสม. โรงพยาบาลประจำจังหวัด
            //5.3.2.9   อสม. โรงพยาบาลประจำอำเภอ
            //5.3.3.9   อสม. โรงพยาบาลส่งเสริมสุขภาพตำบล
            //5.3.4.9   อสม. โรงพยาบาลเอกชน
        );
        $objPHPExcel->setActiveSheetIndex(0);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 6, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $amphurs = array(
            array("อำเภอเมือง",18),
            array("อำเภอแกลง",25),
            array("อำเภอบ้านค่าย",32),
            array("อำเภอบ้านฉาง",51),
            array("อำเภอปลวกแดง",75),
            array("อำเภอวังจันทร์",94),
            array("อำเภอเขาชะเมา",118),
            array("อำเภอนิคมพัฒนา",143),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 
        foreach($amphurs as $amphur){
            $displayColumns = $questions;
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }

        //Sheet 1: โรงพยาบาลและคลีนิก
        $accumulate_r=0;



        $questions = array(

            array('QuestionID'=>array(188,190,192,501),'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
            //5.1.1.1   โรงพยาบาลประจำจังหวัด
            //5.1.2.1   โรงพยาบาลประจำอำเภอ
            //5.1.3.1   โรงพยาบาลส่งเสริมสุขภาพตำบล
            //5.1.4.1   โรงพยาบาลเอกชน
            array('QuestionID'=>194,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),//5.2   จำนวนคลินิกเอกชน
        );
        $objPHPExcel->setActiveSheetIndex(1);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 6, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $amphurs = array(
            array("อำเภอเมือง",18),
            array("อำเภอแกลง",25),
            array("อำเภอบ้านค่าย",33),
            array("อำเภอบ้านฉาง",52),
            array("อำเภอปลวกแดง",76),
            array("อำเภอวังจันทร์",94),
            array("อำเภอเขาชะเมา",117),
            array("อำเภอนิคมพัฒนา",142),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 
        foreach($amphurs as $amphur){
            $displayColumns = array(
                array('QuestionID'=>array(188,190,192,501),'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
                //5.1.1.1   โรงพยาบาลประจำจังหวัด
                //5.1.2.1   โรงพยาบาลประจำอำเภอ
                //5.1.3.1   โรงพยาบาลส่งเสริมสุขภาพตำบล
                //5.1.4.1   โรงพยาบาลเอกชน
                array('QuestionID'=>194,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),//5.2   จำนวนคลินิกเอกชน
            );
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo5_',$this->tmp_file);
    }

    public function No6Action($serveyID){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no6.xls');


        if(!is_numeric($serveyID))
            exit();
        $currentServey = Survey::findFirst($serveyID);
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  ((int)substr($currentServey->no,2)) - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;

        $resultSummary = $this->getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID);
        $result = $this->getAllAmphurAnswerByQuestionID($currentServeyID, $previousServeyID);

        //Sheet 0: รถบรรเทาสาธารณภัย
        $accumulate_r=0;

        $questions = array(            
            array('QuestionID'=>234,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
            //7.1   จำนวนสถิติเพลิงไหม้ในรอบปี (1 ม.ค. - 31 ธ.ค.) 
            array('QuestionID'=>497,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
            //7.3   จำนวนรถยนต์ดับเพลิง (แยกตามขนาดบรรจุน้ำ) 
            array('QuestionID'=>498,'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),
            //7.4   จำนวนรถบรรทุกน้ำ (แยกตามขนาดบรรจุน้ำ)  
            array('QuestionID'=>500,'ColumnID'=>array('I'=>'y2558','J'=>'y2559')),
            //7.6   จำนวนรถบันได (แยกตามความสูง) 
        );
        $objPHPExcel->setActiveSheetIndex(0);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 6, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $amphurs = array(
            array("อำเภอเมือง",18),
            array("อำเภอแกลง",25),
            array("อำเภอบ้านค่าย",32),
            array("อำเภอบ้านฉาง",50),
            array("อำเภอปลวกแดง",74),
            array("อำเภอวังจันทร์",93),
            array("อำเภอเขาชะเมา",116),
            array("อำเภอนิคมพัฒนา",140),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 
        foreach($amphurs as $amphur){
            $displayColumns = $questions;
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }

        //Sheet 1: เจ้าหน้าที่บรรเทาสาธารณภัย
        $accumulate_r=0;

        $questions = array(            
            array('QuestionID'=>320,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
            //7.9   จำนวนพนักงานดับเพลิง 
            array('QuestionID'=>321,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
            //7.10   อาสาสมัครป้องกัน และบรรเทาสาธารณภัย จำนวน  
        );
        $objPHPExcel->setActiveSheetIndex(1);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 6, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $amphurs = array(
            array("อำเภอเมือง",18),
            array("อำเภอแกลง",25),
            array("อำเภอบ้านค่าย",32),
            array("อำเภอบ้านฉาง",51),
            array("อำเภอปลวกแดง",75),
            array("อำเภอวังจันทร์",94),
            array("อำเภอเขาชะเมา",118),
            array("อำเภอนิคมพัฒนา",143),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 
        foreach($amphurs as $amphur){
            $displayColumns = $questions;
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo6_',$this->tmp_file);
    }


    public function No7Action($serveyID){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no7.xls');


        if(!is_numeric($serveyID))
            exit();
        $currentServey = Survey::findFirst($serveyID);
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  ((int)substr($currentServey->no,2)) - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;

        $resultSummary = $this->getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID);
        $result = $this->getAllAmphurAnswerByQuestionID($currentServeyID, $previousServeyID);

        //Sheet 0: รวม
        $accumulate_r=0;

        $questions = array(            
            array('QuestionID'=>349,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
            //8.7.1   ปริมาณขยะ
            array('QuestionID'=>350,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
            //8.7.2   จำนวนรวมรถยนต์ที่ใช้จัดเก็บขยะ
            array('QuestionID'=>498,'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),
            //7.4   จำนวนขยะที่เก็บขนได้ 
        );
        $objPHPExcel->setActiveSheetIndex(0);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 6, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $amphurs = array(
            array("อำเภอเมือง",18),
            array("อำเภอแกลง",25),
            array("อำเภอบ้านค่าย",32),
            array("อำเภอบ้านฉาง",50),
            array("อำเภอปลวกแดง",74),
            array("อำเภอวังจันทร์",93),
            array("อำเภอเขาชะเมา",116),
            array("อำเภอนิคมพัฒนา",140),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 
        foreach($amphurs as $amphur){
            $displayColumns = $questions;
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }

        $amphurs = array(
            1=>array("อำเภอเมือง",6),
            2=>array("อำเภอแกลง",6),
            3=>array("อำเภอบ้านค่าย",6),
            4=>array("อำเภอบ้านฉาง",6),
            5=>array("อำเภอปลวกแดง",6),
            6=>array("อำเภอวังจันทร์",6),
            7=>array("อำเภอเขาชะเมา",6),
            8=>array("อำเภอนิคมพัฒนา",6),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 
        foreach($amphurs as $key => $amphur ){
            $accumulate_r = 0;
            $objPHPExcel->setActiveSheetIndex($key);
            $displayColumns = $questions;
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo7_',$this->tmp_file);
    }

    public function No8Action($serveyID){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no8.xls');


        if(!is_numeric($serveyID))
            exit();
        $currentServey = Survey::findFirst($serveyID);
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  ((int)substr($currentServey->no,2)) - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;

        $resultSummary = $this->getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID);
        $result = $this->getAllAmphurAnswerByQuestionID($currentServeyID, $previousServeyID);


        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo8_',$this->tmp_file);
    }

    public function No9Action($serveyID){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no9.xls');


        if(!is_numeric($serveyID))
            exit();
        $currentServey = Survey::findFirst($serveyID);
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  ((int)substr($currentServey->no,2)) - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;

        $resultSummary = $this->getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID);
        $result = $this->getAllAmphurAnswerByQuestionID($currentServeyID, $previousServeyID);

        //Sheet 0: รวม 3 ปี
        $accumulate_r=0;

        $questions = array(            
            array('QuestionID'=>402,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
            //9.3.2.2   รับจริง(บาท)
            array('QuestionID'=>405,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
            //9.3.3.2   รับจริง(บาท)
            array('QuestionID'=>408,'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),
            //9.3.4.2   รับจริง(บาท)
        );
        $objPHPExcel->setActiveSheetIndex(0);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 6, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $amphurs = array(
            array("อำเภอเมือง",18),
            array("อำเภอแกลง",25),
            array("อำเภอบ้านค่าย",31),
            array("อำเภอบ้านฉาง",50),
            array("อำเภอปลวกแดง",74),
            array("อำเภอวังจันทร์",93),
            array("อำเภอเขาชะเมา",117),
            array("อำเภอนิคมพัฒนา",141),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 
        foreach($amphurs as $amphur){
            $displayColumns = $questions;
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }



        //Sheet 2-9
        $accumulate_r=0;

        $amphurs = array(
            2=>array("อำเภอเมือง",6),
            3=>array("อำเภอแกลง",6),
            4=>array("อำเภอบ้านค่าย",6),
            5=>array("อำเภอบ้านฉาง",6),
            6=>array("อำเภอปลวกแดง",6),
            7=>array("อำเภอวังจันทร์",6),
            9=>array("อำเภอเขาชะเมา",6),
            9=>array("อำเภอนิคมพัฒนา",6),
            );// array( อำเภอ และ แสดงผลแถวที่ x )
        //set amphur 

        foreach($amphurs as $key => $amphur ){
            $accumulate_r = 0;
            $objPHPExcel->setActiveSheetIndex($key);
            $displayColumns = array(            
                array('QuestionID'=>405,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
                //9.3.3.2   ปี 3 รับจริง(บาท)
                array('QuestionID'=>408,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
                //9.3.4.2   ปี 4 รัับจริง(บาท)
            );
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }


        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo9_',$this->tmp_file);
    }

    public function ExtendAction(){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_extend.xls');


        if(!is_numeric($serveyID))
            exit();
        $currentServey = Survey::findFirst($serveyID);
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  ((int)substr($currentServey->no,2)) - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;

        $resultSummary = $this->getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID);
        $result = $this->getAllAmphurAnswerByQuestionID($currentServeyID, $previousServeyID);

        //Sheet 0: รวมรายได้เฉลี่ย
        $accumulate_r=0;


        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNoExtend_',$this->tmp_file);
    }

    public function No2Action($serveyID){
        $this->view->disable();
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(__DIR__.'/../Form/template_no2.xls');
        if(!is_numeric($serveyID))
            exit();
        $currentServey = Survey::findFirst($serveyID);
        if($currentServey)
            $currentServeyID = $currentServey->id;
        else 
            $currentServeyID = -1;
        $lastYear =  ((int)substr($currentServey->no,2)) - 1 ;
        $previousServey = Survey::findFirst(array("no = ?0","bind"=>array("1/".$lastYear)));
        if($previousServey)
            $previousServeyID = $previousServey->ID;
        else
            $previousServeyID = -1;
        

        $resultSummary = $this->getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID);
        $accumulate_r=0;
        /*
            $baseRow = 7 + $accumulate_r;
            $row = 0;
                
            for($r=0;$r<8;$r++) {
                $row = $baseRow + $r;
                $objPHPExcel->setActiveSheetIndex(0)->insertNewRowBefore($row+1,1);
            }
            $accumulate_r += $r;

            $baseRow = 7;
            $row = 0;
            $r=0;
            foreach($resultSummary as $key => $dataRow) {
                $row = $baseRow + $r;
                
                $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$row, $r+1)
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
        */

        $questions = array(
            array('QuestionID'=>26,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
            array('QuestionID'=>28,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
            array('QuestionID'=>30,'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),
            array('QuestionID'=>33,'ColumnID'=>array('I'=>'y2558','J'=>'y2559')),
            array('QuestionID'=>35,'ColumnID'=>array('K'=>'y2558','L'=>'y2559'))
            );
        $objPHPExcel->setActiveSheetIndex(0);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 7, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;

        $result = $this->getAllAmphurAnswerByQuestionID($currentServeyID,$previousServeyID);

        //amphur, sheet row number
        $amphurs = array(
            array("อำเภอเมือง",15),
            array("อำเภอแกลง",24),
            array("อำเภอบ้านค่าย",32),
            array("อำเภอบ้านฉาง",41),
            array("อำเภอปลวกแดง",50),
            array("อำเภอวังจันทร์",59),
            array("อำเภอเขาชะเมา",68),
            array("อำเภอนิคมพัฒนา",77),
            );
        foreach($amphurs as $amphur){
            $displayColumns = array(
                //question, sheet column number
                array('QuestionID'=>26,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
                array('QuestionID'=>28,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
                array('QuestionID'=>30,'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),
                array('QuestionID'=>33,'ColumnID'=>array('I'=>'y2558','J'=>'y2559')),
                array('QuestionID'=>35,'ColumnID'=>array('K'=>'y2558','L'=>'y2559')),
            );
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }
        /*
            $r = $this->setFormNo2_Sheet0($objPHPExcel, 15, $accumulate_r, $result, "อำเภอเมือง");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet0($objPHPExcel, 24, $accumulate_r, $result, "อำเภอแกลง");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet0($objPHPExcel, 32, $accumulate_r, $result, "อำเภอบ้านค่าย");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet0($objPHPExcel, 41, $accumulate_r, $result, "อำเภอบ้านฉาง");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet0($objPHPExcel, 50, $accumulate_r, $result, "อำเภอปลวกแดง");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet0($objPHPExcel, 59, $accumulate_r, $result, "อำเภอวังจันทร์");
            $accumulate_r += $r;
            
            $r = $this->setFormNo2_Sheet0($objPHPExcel, 68, $accumulate_r, $result, "อำเภอเขาชะเมา");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet0($objPHPExcel, 77, $accumulate_r, $result, "อำเภอนิคมพัฒนา");
            $accumulate_r += $r;
        */


        /*Sheet1*/
    
        $accumulate_r = 0;
        /*
            $baseRow = 7 + $accumulate_r;
            $row = 0;
                
            for($r=0;$r<8;$r++) {
                $row = $baseRow + $r;
                $objPHPExcel->setActiveSheetIndex(1)->insertNewRowBefore($row+1,1);
            }
            $accumulate_r += $r;

            $baseRow = 7;
            $row = 0;
            $r=0;
            foreach($resultSummary as $key => $dataRow) {
                $row = $baseRow + $r;
                
                $objPHPExcel->setActiveSheetIndex(1)->setCellValue('A'.$row, $r+1)
                                            ->setCellValue('B'.$row, $key)
                                            ->setCellValue('C'.$row, $dataRow[49]["y2558"])
                                            ->setCellValue('D'.$row, $dataRow[49]["y2559"])
                                            ->setCellValue('E'.$row, $dataRow[50]["y2558"])
                                            ->setCellValue('F'.$row, $dataRow[50]["y2559"])
                                            ->setCellValue('G'.$row, $dataRow[51]["y2558"])
                                            ->setCellValue('H'.$row, $dataRow[51]["y2559"])
                                            ->setCellValue('I'.$row, $dataRow[52]["y2558"])
                                            ->setCellValue('J'.$row, $dataRow[52]["y2559"])
                                            ->setCellValue('K'.$row, $dataRow[53]["y2558"])
                                            ->setCellValue('L'.$row, $dataRow[53]["y2559"])
                                            ->setCellValue('M'.$row, $dataRow[54]["y2558"])
                                            ->setCellValue('N'.$row, $dataRow[54]["y2559"])
                                            ->setCellValue('O'.$row, $dataRow[55]["y2558"])
                                            ->setCellValue('P'.$row, $dataRow[55]["y2559"]);
                $r+=1;
            }
        */
        
        $questions = array(
            array('QuestionID'=>49,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
            array('QuestionID'=>50,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
            array('QuestionID'=>51,'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),
            array('QuestionID'=>52,'ColumnID'=>array('I'=>'y2558','J'=>'y2559')),
            array('QuestionID'=>53,'ColumnID'=>array('K'=>'y2558','L'=>'y2559')),
            array('QuestionID'=>54,'ColumnID'=>array('M'=>'y2558','N'=>'y2559')),
            array('QuestionID'=>55,'ColumnID'=>array('O'=>'y2558','P'=>'y2559'))
            );
        $objPHPExcel->setActiveSheetIndex(1);
        $r = $this->setFormExcelSummarySheet($questions, $objPHPExcel, 7, $accumulate_r ,$resultSummary);
        $accumulate_r += $r;
        //กำหนด ชื่ออำเภอ, แถวเริ่มข้อมูลในอำเภอ
        $amphurs = array(
            array("อำเภอเมือง",15),
            array("อำเภอแกลง",24),
            array("อำเภอบ้านค่าย",32),
            array("อำเภอบ้านฉาง",41),
            array("อำเภอปลวกแดง",50),
            array("อำเภอวังจันทร์",59),
            array("อำเภอเขาชะเมา",68),
            array("อำเภอนิคมพัฒนา",77),
            );
        
        foreach($amphurs as $amphur){
            $displayColumns = array(
                //กำหนด คำถาม, คอรัมน์แสดงข้อมูลในอำเภอ
                array('QuestionID'=>49,'ColumnID'=>array('C'=>'y2558','D'=>'y2559')),
                array('QuestionID'=>50,'ColumnID'=>array('E'=>'y2558','F'=>'y2559')),
                array('QuestionID'=>51,'ColumnID'=>array('G'=>'y2558','H'=>'y2559')),
                array('QuestionID'=>52,'ColumnID'=>array('I'=>'y2558','J'=>'y2559')),
                array('QuestionID'=>53,'ColumnID'=>array('K'=>'y2558','L'=>'y2559')),
                array('QuestionID'=>54,'ColumnID'=>array('M'=>'y2558','N'=>'y2559')),
                array('QuestionID'=>55,'ColumnID'=>array('O'=>'y2558','P'=>'y2559')),
            );
            $r = $this->setFormExcelSheet($displayColumns, $objPHPExcel, $amphur[1], $accumulate_r, $result, $amphur[0]);
            $accumulate_r += $r;
        }
        /*
            $r = $this->setFormNo2_Sheet1($objPHPExcel, 15, $accumulate_r, $result, "อำเภอเมือง");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet1($objPHPExcel, 24, $accumulate_r, $result, "อำเภอแกลง");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet1($objPHPExcel, 32, $accumulate_r, $result, "อำเภอบ้านค่าย");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet1($objPHPExcel, 41, $accumulate_r, $result, "อำเภอบ้านฉาง");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet1($objPHPExcel, 50, $accumulate_r, $result, "อำเภอปลวกแดง");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet1($objPHPExcel, 59, $accumulate_r, $result, "อำเภอวังจันทร์");
            $accumulate_r += $r;
            
            $r = $this->setFormNo2_Sheet1($objPHPExcel, 68, $accumulate_r, $result, "อำเภอเขาชะเมา");
            $accumulate_r += $r;

            $r = $this->setFormNo2_Sheet1($objPHPExcel, 77, $accumulate_r, $result, "อำเภอนิคมพัฒนา");
            $accumulate_r += $r;
        */

        /*Sheet2 ไม่มีประปา*/        
        /*
        $accumulate_r = 0;
        $baseRow = 7 + $accumulate_r;
        $row = 0;
            
        for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->setActiveSheetIndex(2)->insertNewRowBefore($row+1,1);
        }
        $accumulate_r += $r;

        $baseRow = 7;
        $row = 0;
        $r=0;
        foreach($resultSummary as $key => $dataRow) {
            $row = $baseRow + $r;
            
            $objPHPExcel->setActiveSheetIndex(1)->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('B'.$row, $key)
                                        ->setCellValue('C'.$row, $dataRow[49]["y2558"])
                                        ->setCellValue('D'.$row, $dataRow[49]["y2559"])
                                        ->setCellValue('E'.$row, $dataRow[50]["y2558"])
                                        ->setCellValue('F'.$row, $dataRow[50]["y2559"])
                                        ->setCellValue('G'.$row, $dataRow[51]["y2558"]);
            $r+=1;
        }*/

        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');//Excel5
        $objWriter->save($this->tmp_file);
  	 	$this->converttoexceltemplate('FormNo2_',$this->tmp_file);
    }
    public function setFormNo2_Sheet0($objPHPExcel, $atRow, $accumulate_r ,$result, $amphurName){
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

    public function setFormNo2_Sheet1($objPHPExcel, $atRow, $accumulate_r ,$result, $amphurName){
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
                                        ->setCellValue('C'.$row, $dataRow[49]["y2558"])
                                        ->setCellValue('D'.$row, $dataRow[49]["y2559"])
                                        ->setCellValue('E'.$row, $dataRow[50]["y2558"])
                                        ->setCellValue('F'.$row, $dataRow[50]["y2559"])
                                        ->setCellValue('G'.$row, $dataRow[51]["y2558"])
                                        ->setCellValue('H'.$row, $dataRow[51]["y2559"])
                                        ->setCellValue('I'.$row, $dataRow[52]["y2558"])
                                        ->setCellValue('J'.$row, $dataRow[52]["y2559"])
                                        ->setCellValue('K'.$row, $dataRow[53]["y2558"])
                                        ->setCellValue('L'.$row, $dataRow[53]["y2559"])
                                        ->setCellValue('M'.$row, $dataRow[54]["y2558"])
                                        ->setCellValue('N'.$row, $dataRow[54]["y2559"])
                                        ->setCellValue('O'.$row, $dataRow[55]["y2558"])
                                        ->setCellValue('P'.$row, $dataRow[55]["y2559"]);
            $r+=1;
        }
        return $r;
    }

    //$r = $this->setFormExcelSummarySheet(array(array('QuestionID'=>57,'ColumnID'=>array('C'=>'y2558','D'=>'y2559'))), $objPHPExcel, 6, $accumulate_r ,$resultSummary);
        
    public function setFormExcelSummarySheet($questions, &$objPHPExcel, $atRow, $accumulate_r ,$resultSummary){
        $baseRow = $atRow + $accumulate_r;
        $row = 0;
            
        for($r=0;$r<8;$r++) {
            $row = $baseRow + $r;
            $objPHPExcel->getActiveSheet()->insertNewRowBefore($row+1,1);
        }
        
        $accumulate_r += $r;

        $baseRow = $atRow;
        $row = 0;
        $r=0;
        foreach($resultSummary as $key => $dataRow) {
            $row = $baseRow + $r;
            
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('B'.$row, $key);
            foreach($questions as $question){
                foreach($question['ColumnID'] as $key => $col){
                    if(is_numeric($question['QuestionID']))
                        $objPHPExcel->getActiveSheet()->setCellValue( $key.$row, $dataRow[$question['QuestionID']][$col]);
                    elseif(is_array($question['QuestionID'])){
                        $value=0;
                        foreach ($question['QuestionID'] as $a_key => $questionNo){                            
                            $value += $dataRow[$questionNo][$col];
                        }
                        $objPHPExcel->getActiveSheet()->setCellValue( $key.$row, $value);
                    }
                }
            }
                                    
            $r+=1;
        }
        return $r;
    }
    public function setFormExcelSheet($questions, $objPHPExcel, $atRow, $accumulate_r ,$result, $amphurName){
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
            /*$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
                                        ->setCellValue('B'.$row, $key)
                                        ->setCellValue('C'.$row, $dataRow[57]["y2558"])
                                        ->setCellValue('D'.$row, $dataRow[57]["y2559"]);
                                        */
            $objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)->setCellValue('B'.$row, $key);
            foreach($questions as $q){
                foreach($q['ColumnID'] as $key => $col){                    
                    //$objPHPExcel->getActiveSheet()->setCellValue($key.$row, $dataRow[$q['QuestionID']][$col]);

                    if(is_numeric($q['QuestionID']))
                        $objPHPExcel->getActiveSheet()->setCellValue( $key.$row, $dataRow[$q['QuestionID']][$col]);
                    elseif(is_array($q['QuestionID'])){
                        $value=0;
                        foreach ($q['QuestionID'] as $a_key => $questionNo){                            
                            $value += $dataRow[$questionNo][$col];
                        }
                        $objPHPExcel->getActiveSheet()->setCellValue( $key.$row, $value);
                    }
                }
            }
            $r+=1;
        }
        return $r;
    }    
    
    public function getSummaryAnswerByQuestionID($currentServeyID, $previousServeyID){

        $phql = "select question.id, amphur._order, amphur.name,  sum(IFNULL(answer2558.answer,0)) y2558,  sum(IFNULL(answer2559.answer,0)) y2559 
            from 
                Clinic\Model\DiscoverySurvey discovery_survey 
                left join Clinic\Model\Answer answer2558 on (answer2558.discovery_surveyid = discovery_survey.id and discovery_survey.surveyid = $previousServeyID) 
                left join Clinic\Model\Answer answer2559 on (answer2559.discovery_surveyid = discovery_survey.id and discovery_survey.surveyid = $currentServeyID ) 
                join Clinic\Model\Question question on (question.id = answer2558.questionid or question.id = answer2559.questionid) 
                left join Clinic\Model\Office office on (office.id = discovery_survey.officeid) 
                left join Clinic\Model\Amphur amphur on (office.amphurid = amphur.id)
            group by  amphur._order, question.id, amphur.name
            order by amphur._order";

        $data = $this->modelsManager->executeQuery($phql, array("lastYear"=>$previousServeyID, "currentYear"=>$currentServeyID));

        $resultSummary = [];
        foreach($data as $r => $dataRow) {
            //result[อำเภอ][id]{  [y2558]=> y2558, [y2559]=> 2559   }
            $resultSummary[$dataRow["name"]][$dataRow["id"]] = array('y2558'=>$dataRow["y2558"], 'y2559'=>$dataRow["y2559"]);
        }
        return $resultSummary;
    }
    public function getAllAmphurAnswerByQuestionID($currentServeyID, $previousServeyID){

        $phql = "select question.id, amphur.name amphur_name, office.name office_name, sum(IFNULL(answer2558.answer,0)) y2558,  sum(IFNULL(answer2559.answer,0)) y2559 
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
            //สร้าง $result โครงสร้าง [อำเภอ][ชื่อหน่วยงาน อบต][id]{  [y2558]=> สถิติปี 2558, [y2559]=> สถิติปี 2559   }
            $result[$dataRow["amphur_name"]][$dataRow["office_name"]][$dataRow["id"]] = 
                array( 'y2558' => $dataRow["y2558"], 'y2559' =>  $dataRow["y2559"]);
        }
        return $result;
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