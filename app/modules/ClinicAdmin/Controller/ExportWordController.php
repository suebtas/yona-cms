<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

//include __DIR__.'/../../../../vendor/HTMLtoOpenXML/HTMLtoOpenXML.php';
//use HTMLtoOpenXML;
use Application\Mvc\Controller;
use PhpOffice\PhpWord;
use Clinic\Model\Answer;
use Clinic\Model\DiscoverySurvey;
use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Clinic\Model\BoundaryOffice;
use Clinic\Model\BoundaryTambon;
use Clinic\Model\Tambon;
use Clinic\Model\SigningApprover;

class ExportWordController extends Controller
{

    public $tmp_file = 'data/cache/FormNoTMP.xlsx';
    public function initialize()
    {
        
        $this->setAdminEnvironment();
        $this->view->languages_disabled = true;

        $this->surveyid = $this->session->get('surveyid');
      	$this->discoverySurveyid = $this->session->get('discovery_surveyid');
      	//echo $this->discoverySurvey->id."--".$discovery_surveyid;

      	$this->discoverySurvey =  DiscoverySurvey::findFirst("id = {$this->discoverySurveyid}");
      	$this->year = $this->discoverySurvey->Survey->no;

       
        $auth = $this->session->get('auth');
        $username = AdminUser::findFirst($auth->id);
        $this->user = $username;
        $this->view->office =  Office::findFirst($this->user->officeid);

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

    public function thaiMonth($m)
    {
      switch($m)
      {
        case "jan" : return "มกราคม "; break;
        case "feb" : return "กุมภาพันธ์ "; break;
        case "mar" : return "มีนาคม "; break;
        case "apr" : return "เมษายน "; break;
        case "may" : return "พฤษภาคม "; break;
        case "jun" : return "มิถุนายน "; break;
        case "jul" : return "กรกฎาคม "; break;
        case "aug" : return "สิงหาคม "; break;
        case "sep" : return "กันยายน "; break;
        case "oct" : return "ตุลาคม "; break;
        case "nov" : return "พฤศจิกายน "; break;
        case "dec" : return "ธันวาคม "; break;
        default : return ""; break;

      }
    }

    public function PrintFormNo1Action()
    {
    	      $this->view->disable();
            $no1_3_1 = $no1_3_2 = $no1_3_3 = $no1_3_4 = [];

            $no1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>2,
                                    2=>$this->discoverySurvey->id)))->answer;
           $no1_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>553,
                                    2=>$this->discoverySurvey->id)))->answer;
            $no1_2_1_1 = Answer::findFirst(
                             array("questionid=?1 and discovery_surveyid=?2",
                                 "bind"=>array(
                                     1=>7,
                                     2=>$this->discoverySurvey->id)))->answer;
            $no1_2_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>8,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>9,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>10,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>11,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>12,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>13,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>14,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>15,
                                    2=>$this->discoverySurvey->id)))->answer;


            $no1_2_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>16,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_6_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>17,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_6_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>397,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_7_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>18,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_7_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>398,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_8_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>19,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_8_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>399,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_9 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>20,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_10 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>21,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_11 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>22,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_2_12 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>23,
                                    2=>$this->discoverySurvey->id)))->answer;
            $no1_2_13 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>24,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no1_3_1 = BoundaryTambon::toArrayCloseTambonID(
                        array("owner_officeid = ?1 and boundaryid = 1",
                            "bind" => array(
                                1=>$this->discoverySurvey->officeid
                                )
                            )
                        );
            //var_dump($no1_3_1);
            foreach ($no1_3_1 as $value) {
                $TB = Tambon::findFirst("id = {$value}");
                $north = $north." ".$TB->name;
            }
            
            $no1_3_2 = BoundaryTambon::toArrayCloseTambonID(
                        array("owner_officeid = ?1 and boundaryid = 2",
                            "bind" => array(
                                1=>$this->discoverySurvey->officeid
                                )
                            )
                        );
            foreach ($no1_3_2 as $value) {
                $TB = Tambon::findFirst("id = {$value}");
                $south = $south." ".$TB->name;
            }


            $no1_3_3 = BoundaryTambon::toArrayCloseTambonID(
                        array("owner_officeid = ?1 and boundaryid = 3",
                            "bind" => array(
                                1=>$this->discoverySurvey->officeid
                                )
                            )
                        );
            foreach ($no1_3_3 as $value) {
                $TB = Tambon::findFirst("id = {$value}");
                $west = $west." ".$TB->name;
            }

            $no1_3_4 = BoundaryTambon::toArrayCloseTambonID(
                        array("owner_officeid = ?1 and boundaryid = 4",
                            "bind" => array(
                                1=>$this->discoverySurvey->officeid
                                )
                            )

                        );
            foreach ($no1_3_4 as $value) {
                $TB = Tambon::findFirst("id = {$value}");
                $east = $east." ".$TB->name;
            }
            
    	
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo1.docx');
        //$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo2.docx');
        //var_dump(($document));die();
        date_default_timezone_set('Asia/Bangkok');

        $document->setValue('{year}', $this->year);
        $document->setValue('{office}', $this->discoverySurvey->Office->name);
        $document->setValue('{no1_2}', $this->toformatNumber($no1_2));
        $document->setValue('{calno1_2}', $this->toformatNumber($no1_2/625));
        $document->setValue('{no1_3_1}', $north);
        $document->setValue('{no1_3_2}', $south);
        $document->setValue('{no1_3_3}', $west);
        $document->setValue('{no1_3_4}', $east);
        $document->setValue('{no1_3_4}', $east);
        $document->setValue('{no1_2_1}', $no1_2_1);
       
        $no1_2_1_1 = $no1_2_2_1 + $no1_2_3_1 + $no1_2_4_1 + $no1_2_5_1;
        $document->setValue('{no1_2_1_1}', $this->toformatNumber2($no1_2_1_1));
        $no1_2_1_2 = $no1_2_2_2 + $no1_2_3_2 + $no1_2_4_2 + $no1_2_5_2;
        $document->setValue('{no1_2_1_2}', $this->toformatNumber2($no1_2_1_2));
        $document->setValue('{no1_2_2_1}', $this->toformatNumber2($no1_2_2_1));
        $document->setValue('{no1_2_2_2}', $this->toformatNumber2($no1_2_2_2));
        $document->setValue('{no1_2_3_1}', $this->toformatNumber2($no1_2_3_1));
        $document->setValue('{no1_2_3_2}', $this->toformatNumber2($no1_2_3_2));
        $document->setValue('{no1_2_4_1}', $this->toformatNumber2($no1_2_4_1));
        $document->setValue('{no1_2_4_2}', $this->toformatNumber2($no1_2_4_2));
        $document->setValue('{no1_2_5_1}', $this->toformatNumber2($no1_2_5_1));
        $document->setValue('{no1_2_5_2}', $this->toformatNumber2($no1_2_5_2));
        $document->setValue('{no1_2_6_1}', $this->toformatNumber2($no1_2_6_1));
        $document->setValue('{no1_2_6_2}', $no1_2_6_2);
        $document->setValue('{no1_2_7_1}', $this->toformatNumber2($no1_2_7_1));
        $document->setValue('{no1_2_7_2}', $no1_2_7_2);
        $document->setValue('{no1_2_8_1}', $this->toformatNumber2($no1_2_8_1));
        $document->setValue('{no1_2_9}', $this->toformatNumber($no1_2_9));
        $document->setValue('{no1_2_10}', $this->toformatNumber2($no1_2_10));
        $document->setValue('{no1_2_11}', $this->toformatNumber2($no1_2_11));
        $document->setValue('{no1_2_12}', $this->toformatNumber2($no1_2_12));
        $document->setValue('{no1_2_13}', $this->toformatNumber2($no1_2_13));

        $signingApprover = SigningApprover::findFirst(array("discovery_surveyid=?0 and group_session_id =?1","bind"=>array($this->discoverySurvey->id, 1)));        
        $document->setValue('{user}',$signingApprover->name);         
        $document->setValue('{phone}',$signingApprover->phone);       
        $document->setValue('{approver}',$this->discoverySurvey->signing_approver);
        $document->setValue('{phone2}',$this->discoverySurvey->approver_phone);
        
        $result = $document->saveAs($this->tmp_file);   
        $this->converttowordtemplate('FormNo1_',$this->tmp_file);
    }

    public function PrintFormNo2Action()
    {
    	 $this->view->disable();
    	 $no2_1_1 = Answer::findFirst(
                    array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>25,
                                      2=>$this->discoverySurvey->id)))->answer;
        $no2_1_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>26,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_1_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>27,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_1_3_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>28,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_1_3_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>29,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_1_4_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>30,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_1_4_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>31,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_1_5_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>32,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_1_5_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>33,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_1_5_3= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>34,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_1_6= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>35,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_2_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>36,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_2_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>37,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_3_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>38,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_3_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>39,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_3_3= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>40,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_3_4= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>41,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_3_5= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>42,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_3_6= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>43,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_3_7= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>44,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_3_8= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>554,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_4_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>45,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_4_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>46,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_4_3= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>47,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_4_4= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>48,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_5_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>49,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_5_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>50,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_5_3= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>51,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_5_4= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>52,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_5_5= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>53,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_5_6= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>54,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_5_7= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>55,
                              2=>$this->discoverySurvey->id)))->answer;
        $no2_5_8= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>56,
                              2=>$this->discoverySurvey->id)))->answer;
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo2.docx');
        //$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo2.docx');
        //var_dump(($document));die();
        date_default_timezone_set('Asia/Bangkok');

        $document->setValue('{year}', $this->year);
        $document->setValue('{office}', $this->discoverySurvey->Office->name);
        $document->setValue('{no2_1_1}', $this->toformatNumber2($no2_1_1));
        $document->setValue('{no2_1_2_1}', $this->toformatNumber2($no2_1_2_1));
        $document->setValue('{no2_1_2_2}', $this->toformatNumber($no2_1_2_2));
        $document->setValue('{no2_1_3_1}', $this->toformatNumber2($no2_1_3_1));
        $document->setValue('{no2_1_3_2}', $this->toformatNumber($no2_1_3_2));
        $document->setValue('{no2_1_4_1}', $this->toformatNumber2($no2_1_4_1));
        $document->setValue('{no2_1_4_2}', $this->toformatNumber($no2_1_4_2));
        $document->setValue('{no2_1_5_1}', $no2_1_5_1);
        $document->setValue('{no2_1_5_2}', $this->toformatNumber2($no2_1_5_2));
        $document->setValue('{no2_1_5_3}', $this->toformatNumber($no2_1_5_3));
        $document->setValue('{no2_1_6}', $no2_1_6);
        $document->setValue('{no2_2_1}', $this->toformatNumber2($no2_2_1));
        $document->setValue('{no2_2_2}', $no2_2_2);
        $document->setValue('{no2_3_1}', $this->toformatNumber2($no2_3_1));
        $document->setValue('{no2_3_2}', $this->toformatNumber2($no2_3_2));
        $document->setValue('{no2_3_3}', $this->toformatNumber2($no2_3_3));
        $document->setValue('{no2_3_4}', $this->toformatNumber2($no2_3_4));
        $document->setValue('{no2_3_5}', $this->toformatNumber2($no2_3_5));
        $document->setValue('{no2_3_6}', $this->toformatNumber2($no2_3_6));
        $document->setValue('{no2_3_7}', $this->toformatNumber2($no2_3_7));
        $document->setValue('{no2_3_8}', $this->toformatNumber2($no2_3_8));
        $document->setValue('{no2_4_1}', $this->toformatNumber2($no2_4_1));
        $document->setValue('{no2_4_2}', $this->toformatNumber($no2_4_2));
        $document->setValue('{no2_4_3}', $this->toformatNumber2($no2_4_3));
        $document->setValue('{no2_4_4}', $this->toformatNumber2($no2_4_4));
        $document->setValue('{no2_5_1}', $this->toformatNumber($no2_5_1));
        $document->setValue('{no2_5_2}', $this->toformatNumber($no2_5_2));
        $document->setValue('{no2_5_3}', $this->toformatNumber($no2_5_3));
        $document->setValue('{no2_5_4}', $this->toformatNumber($no2_5_4));
        $document->setValue('{no2_5_5}', $this->toformatNumber($no2_5_5));
        $document->setValue('{no2_5_6}', $this->toformatNumber($no2_5_6));
        $document->setValue('{no2_5_7}', $this->toformatNumber($no2_5_7));
        $no2_5_sum = $no2_5_1 + $no2_5_2 + $no2_5_3 + $no2_5_4 + $no2_5_5 + $no2_5_6 + $no2_5_7;
        $document->setValue('{no2_5_sum}', $this->toformatNumber($no2_5_sum));
        
        $signingApprover = SigningApprover::findFirst(array("discovery_surveyid=?0 and group_session_id =?1","bind"=>array($this->discoverySurvey->id, 2)));        
        $document->setValue('{user}',$signingApprover->name);         
        $document->setValue('{phone}',$signingApprover->phone);        
        $document->setValue('{approver}',$this->discoverySurvey->signing_approver);
        $document->setValue('{phone2}',$this->discoverySurvey->approver_phone);
        $result = $document->saveAs($this->tmp_file);   
        $this->converttowordtemplate('FormNo2_',$this->tmp_file);    		
    }

    public function PrintFormNo3Action()
    {
        $this->view->disable();
        $no3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>57,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>58,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>59,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>60,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_2_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>61,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_2_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>494,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>62,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>63,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>64,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>65,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>66,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>67,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>68,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_5_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>69,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_5_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>70,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_6_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>71,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_6_2= Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>72,
                                2=>$this->discoverySurvey->id)))->answer;
        $no3_6_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>73,
                                2=>$this->discoverySurvey->id)))->answer;
      
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo3.docx');
        //$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo2.docx');
        //var_dump(($document));die();
        date_default_timezone_set('Asia/Bangkok');

        $document->setValue('{year}', $this->year);
        $document->setValue('{office}', $this->discoverySurvey->Office->name);
        $document->setValue('{no3_1}', $this->toformatNumber($no3_1));
        $document->setValue('{no3_2_1}', $this->toformatNumber2($no3_2_1));
        $document->setValue('{no3_2_2}', $this->toformatNumber2($no3_2_2));
        $document->setValue('{no3_2_3}', $this->toformatNumber2($no3_2_3));
        $document->setValue('{no3_2_4}', $this->toformatNumber2($no3_2_4));
        $document->setValue('{no3_2_6}', $this->toformatNumber2($no3_2_6));
        $document->setValue('{no3_3_1}', $this->toformatNumber2($no3_3_1));
        $document->setValue('{no3_3_2}', $this->toformatNumber2($no3_3_2));
        $document->setValue('{no3_3_3}', $this->toformatNumber2($no3_3_3));
        $document->setValue('{no3_4_1}', $this->toformatNumber2($no3_4_1));
        $document->setValue('{no3_4_2}', $this->toformatNumber2($no3_4_2));
        $document->setValue('{no3_4_3}', $this->toformatNumber2($no3_4_3));
        $document->setValue('{no3_4_4}', $this->toformatNumber2($no3_4_4));
        $document->setValue('{no3_5_1}', $this->toformatNumber2($no3_5_1));
        $document->setValue('{no3_5_2}', $this->toformatNumber2($no3_5_2));
        $document->setValue('{no3_6_1}', $this->toformatNumber2($no3_6_1));
        $document->setValue('{no3_6_2}', $this->toformatNumber2($no3_6_2));
        $document->setValue('{no3_6_3}', $this->toformatNumber($no3_6_3));

        $signingApprover = SigningApprover::findFirst(array("discovery_surveyid=?0 and group_session_id =?1","bind"=>array($this->discoverySurvey->id, 3)));        
        $document->setValue('{user}',$signingApprover->name);         
        $document->setValue('{phone}',$signingApprover->phone);       
        $document->setValue('{approver}',$this->discoverySurvey->signing_approver);
        $document->setValue('{phone2}',$this->discoverySurvey->approver_phone);
        $result = $document->saveAs($this->tmp_file);   
        $this->converttowordtemplate('FormNo3_',$this->tmp_file);
    }

    public function PrintFormNo4Action()
    {
    	     $this->view->disable();
            $no4_1 = Answer::findFirst(
                    array("questionid=?1 and discovery_surveyid=?2",
                        "bind"=>array(
                            1=>74,
                            2=>$this->discoverySurvey->id)))->answer;

            $no4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>75,
                                    2=>$this->discoverySurvey->id)))->answer;
            //die($no4_2);
            $no4_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>76,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>77,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>78,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>79,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>80,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_3_6 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>81,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_3_7 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>82,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_3_8 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>83,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>84,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>85,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>86,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>87,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>88,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>89,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>90,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>91,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>92,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>93,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>94,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>95,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>96,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>97,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_4_5_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>98,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>99,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>100,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>101,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>102,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_1_1_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>103,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_1_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>104,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>105,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>106,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>107,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_1_2_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>108,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_1_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>109,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>110,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>111,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>112,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_1_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>113,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_1_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>114,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>115,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>116,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_1_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>117,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_1_4_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>118,
                                    2=>$this->discoverySurvey->id)))->answer;*/

//no4_5_2
            $no4_5_2_1_1 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>119,
                        2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>120,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>121,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>122,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_2_1_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>123,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_2_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>124,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>125,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>126,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>127,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_2_2_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>128,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_2_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>129,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>130,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>131,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>132,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_2_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>133,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_2_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>134,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>135,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>136,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_2_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>137,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_2_4_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>138,
                                    2=>$this->discoverySurvey->id)))->answer;*/

//no4_5_3
            $no4_5_3_1_1 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>139,
                        2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>140,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>141,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>142,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_3_1_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>133,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_3_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>144,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>145,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>146,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>147,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_3_2_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>148,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_3_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>149,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>150,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>151,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>152,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_3_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>153,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_3_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>154,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>155,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>156,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_3_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>157,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_3_4_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>158,
                                    2=>$this->discoverySurvey->id)))->answer;*/

//no4_5_4
            $no4_5_4_1_1 = Answer::findFirst(
                          array("questionid=?1 and discovery_surveyid=?2",
                              "bind"=>array(
                                  1=>159,
                                  2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>160,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>161,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>162,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_4_1_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>163,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_4_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>164,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>165,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>166,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>167,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_4_2_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>168,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_4_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>169,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>170,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>171,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>172,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_4_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>173,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_5_4_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>174,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>175,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>176,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_5_4_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>177,
                                    2=>$this->discoverySurvey->id)))->answer;

            /*$no4_5_4_4_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>178,
                                    2=>$this->discoverySurvey->id)))->answer;*/

            $no4_6_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>179,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_6_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>180,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_6_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>181,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_6_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>182,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_6_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>183,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_6_6 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>184,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_6_7 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>185,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_6_8_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>186,
                                    2=>$this->discoverySurvey->id)))->answer;

            $no4_6_8_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>187,
                                    2=>$this->discoverySurvey->id)))->answer;

    	
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
    		$document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo4.docx');
    		//$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo6.docx');
    		//var_dump(($document));die();
    		date_default_timezone_set('Asia/Bangkok');

    		$document->setValue('{year}', $this->year);
    		$document->setValue('{office}', $this->discoverySurvey->Office->name);
    		$document->setValue('{no4_1}', $this->toformatNumber2($no4_1));
    		$document->setValue('{no4_2}', $this->toformatNumber2($no4_2));

    		$document->setValue('{no4_3_1}', $this->toformatNumber($no4_3_1));
    		$document->setValue('{no4_3_2}', $this->toformatNumber2($no4_3_2));
    		$document->setValue('{no4_3_3}', $this->toformatNumber($no4_3_3));
    		$document->setValue('{no4_3_4}', $this->toformatNumber2($no4_3_4));
    		$document->setValue('{no4_3_5}', $this->toformatNumber($no4_3_5));
    		$document->setValue('{no4_3_6}', $this->toformatNumber2($no4_3_6));
    		$document->setValue('{no4_3_7}', $this->toformatNumber($no4_3_7));
    		$document->setValue('{no4_3_8}', $this->toformatNumber2($no4_3_8));

    		$document->setValue('{no4_4_1_1}', $no4_4_1_1);
    		$document->setValue('{no4_4_1_2}', $this->thaiMonth($no4_4_1_2));
    		$document->setValue('{no4_4_1_3}', $no4_4_1_3);
    		$document->setValue('{no4_4_2_1}', $no4_4_2_1);
    		$document->setValue('{no4_4_2_2}', $this->thaiMonth($no4_4_2_2));
    		$document->setValue('{no4_4_2_3}', $no4_4_2_3);
    		$document->setValue('{no4_4_3_1}', $no4_4_3_1);
    		$document->setValue('{no4_4_3_2}', $this->thaiMonth($no4_4_3_2));
    		$document->setValue('{no4_4_3_3}', $no4_4_3_3);
    		$document->setValue('{no4_4_4_1}', $no4_4_4_1);
    		$document->setValue('{no4_4_4_2}', $this->thaiMonth($no4_4_4_2));
    		$document->setValue('{no4_4_4_3}', $no4_4_4_3);
    		$document->setValue('{no4_4_5_1}', $no4_4_5_1);
    		$document->setValue('{no4_4_5_2}', $this->thaiMonth($no4_4_5_2));
    		$document->setValue('{no4_4_5_3}', $no4_4_5_3);

    		//die($no4_5_1_1_5);
    		$no4_5_1_1_5 = $no4_5_1_1_1 + $no4_5_1_1_2 + $no4_5_1_1_3 + $no4_5_1_1_4;
    		$document->setValue('{no4_5_1_1_1}', $this->toformatNumber2($no4_5_1_1_1));
    		$document->setValue('{no4_5_1_1_2}', $this->toformatNumber2($no4_5_1_1_2));
    		$document->setValue('{no4_5_1_1_3}', $this->toformatNumber2($no4_5_1_1_3));
    		$document->setValue('{no4_5_1_1_4}', $this->toformatNumber2($no4_5_1_1_4));
    		$document->setValue('{no4_5_1_1_5}', $this->toformatNumber2($no4_5_1_1_5));

    		$no4_5_1_2_5 = $no4_5_1_2_1 + $no4_5_1_2_2 + $no4_5_1_2_3 + $no4_5_1_2_4;
    		$document->setValue('{no4_5_1_2_1}', $this->toformatNumber2($no4_5_1_2_1));
    		$document->setValue('{no4_5_1_2_2}', $this->toformatNumber2($no4_5_1_2_2));
    		$document->setValue('{no4_5_1_2_3}', $this->toformatNumber2($no4_5_1_2_3));
    		$document->setValue('{no4_5_1_2_4}', $this->toformatNumber2($no4_5_1_2_4));
    		$document->setValue('{no4_5_1_2_5}', $this->toformatNumber2($no4_5_1_2_5));

    		$no4_5_1_3_5 = $no4_5_1_3_1 + $no4_5_1_3_2 + $no4_5_1_3_3 + $no4_5_1_3_4;
    		$document->setValue('{no4_5_1_3_1}', $this->toformatNumber2($no4_5_1_3_1));
    		$document->setValue('{no4_5_1_3_2}', $this->toformatNumber2($no4_5_1_3_2));
    		$document->setValue('{no4_5_1_3_3}', $this->toformatNumber2($no4_5_1_3_3));
    		$document->setValue('{no4_5_1_3_4}', $this->toformatNumber2($no4_5_1_3_4));
    		$document->setValue('{no4_5_1_3_5}', $this->toformatNumber2($no4_5_1_3_5));

    		$no4_5_1_4_5 = $no4_5_1_4_1 + $no4_5_1_4_2 + $no4_5_1_4_3 + $no4_5_1_4_4;
    		$document->setValue('{no4_5_1_4_1}', $this->toformatNumber2($no4_5_1_4_1));
    		$document->setValue('{no4_5_1_4_2}', $this->toformatNumber2($no4_5_1_4_2));
    		$document->setValue('{no4_5_1_4_3}', $this->toformatNumber2($no4_5_1_4_3));
    		$document->setValue('{no4_5_1_4_4}', $this->toformatNumber2($no4_5_1_4_4));
    		$document->setValue('{no4_5_1_4_5}', $this->toformatNumber2($no4_5_1_4_5));

    		$no4_5_2_1_5 = $no4_5_2_1_1 + $no4_5_2_1_2 + $no4_5_2_1_3 + $no4_5_2_1_4;
    		$document->setValue('{no4_5_2_1_1}', $this->toformatNumber2($no4_5_2_1_1));
    		$document->setValue('{no4_5_2_1_2}', $this->toformatNumber2($no4_5_2_1_2));
    		$document->setValue('{no4_5_2_1_3}', $this->toformatNumber2($no4_5_2_1_3));
    		$document->setValue('{no4_5_2_1_4}', $this->toformatNumber2($no4_5_2_1_4));
    		$document->setValue('{no4_5_2_1_5}', $this->toformatNumber2($no4_5_2_1_5));

    		$no4_5_2_2_5 = $no4_5_2_2_1 + $no4_5_2_2_2 + $no4_5_2_2_3 + $no4_5_2_2_4;
    		$document->setValue('{no4_5_2_2_1}', $this->toformatNumber2($no4_5_2_2_1));
    		$document->setValue('{no4_5_2_2_2}', $this->toformatNumber2($no4_5_2_2_2));
    		$document->setValue('{no4_5_2_2_3}', $this->toformatNumber2($no4_5_2_2_3));
    		$document->setValue('{no4_5_2_2_4}', $no4_5_2_2_4);
    		$document->setValue('{no4_5_2_2_5}', $this->toformatNumber2($no4_5_2_2_5));

    		$no4_5_2_3_5 = $no4_5_2_3_1 + $no4_5_2_3_2 + $no4_5_2_3_3 + $no4_5_2_3_4;
    		$document->setValue('{no4_5_2_3_1}', $this->toformatNumber2($no4_5_2_3_1));
    		$document->setValue('{no4_5_2_3_2}', $this->toformatNumber2($no4_5_2_3_2));
    		$document->setValue('{no4_5_2_3_3}', $this->toformatNumber2($no4_5_2_3_3));
    		$document->setValue('{no4_5_2_3_4}', $this->toformatNumber2($no4_5_2_3_4));
    		$document->setValue('{no4_5_2_3_5}', $this->toformatNumber2($no4_5_2_3_5));

    		$no4_5_2_4_5 = $no4_5_2_4_1 + $no4_5_2_4_2 + $no4_5_2_4_3 + $no4_5_2_4_4;
    		$document->setValue('{no4_5_2_4_1}', $this->toformatNumber2($no4_5_2_4_1));
    		$document->setValue('{no4_5_2_4_2}', $this->toformatNumber2($no4_5_2_4_2));
    		$document->setValue('{no4_5_2_4_3}', $this->toformatNumber2($no4_5_2_4_3));
    		$document->setValue('{no4_5_2_4_4}', $this->toformatNumber2($no4_5_2_4_4));
    		$document->setValue('{no4_5_2_4_5}', $this->toformatNumber2($no4_5_2_4_5));

    		$no4_5_3_1_5 = $no4_5_3_1_1 + $no4_5_3_1_2 + $no4_5_3_1_3 + $no4_5_3_1_4;
    		$document->setValue('{no4_5_3_1_1}', $this->toformatNumber2($no4_5_3_1_1));
    		$document->setValue('{no4_5_3_1_2}', $this->toformatNumber2($no4_5_3_1_2));
    		$document->setValue('{no4_5_3_1_3}', $this->toformatNumber2($no4_5_3_1_3));
    		$document->setValue('{no4_5_3_1_4}', $this->toformatNumber2($no4_5_3_1_4));
    		$document->setValue('{no4_5_3_1_5}', $this->toformatNumber2($no4_5_3_1_5));

    		$no4_5_3_2_5 = $no4_5_3_2_1 + $no4_5_3_2_2 + $no4_5_3_2_3 + $no4_5_3_2_4;
    		$document->setValue('{no4_5_3_2_1}', $this->toformatNumber2($no4_5_3_2_1));
    		$document->setValue('{no4_5_3_2_2}', $this->toformatNumber2($no4_5_3_2_2));
    		$document->setValue('{no4_5_3_2_3}', $this->toformatNumber2($no4_5_3_2_3));
    		$document->setValue('{no4_5_3_2_4}', $this->toformatNumber2($no4_5_3_2_4));
    		$document->setValue('{no4_5_3_2_5}', $this->toformatNumber2($no4_5_3_2_5));

    		$no4_5_3_3_5 = $no4_5_3_3_1 + $no4_5_3_3_2 + $no4_5_3_3_3 + $no4_5_3_3_4;
    		$document->setValue('{no4_5_3_3_1}', $this->toformatNumber2($no4_5_3_3_1));
    		$document->setValue('{no4_5_3_3_2}', $this->toformatNumber2($no4_5_3_3_2));
    		$document->setValue('{no4_5_3_3_3}', $this->toformatNumber2($no4_5_3_3_3));
    		$document->setValue('{no4_5_3_3_4}', $this->toformatNumber2($no4_5_3_3_4));
    		$document->setValue('{no4_5_3_3_5}', $this->toformatNumber2($no4_5_3_3_5));

    		$no4_5_3_4_5 = $no4_5_3_4_1 + $no4_5_3_4_2 + $no4_5_3_4_3 + $no4_5_3_4_4;
    		$document->setValue('{no4_5_3_4_1}', $this->toformatNumber2($no4_5_3_4_1));
    		$document->setValue('{no4_5_3_4_2}', $this->toformatNumber2($no4_5_3_4_2));
    		$document->setValue('{no4_5_3_4_3}', $this->toformatNumber2($no4_5_3_4_3));
    		$document->setValue('{no4_5_3_4_4}', $this->toformatNumber2($no4_5_3_4_4));
    		$document->setValue('{no4_5_3_4_5}', $this->toformatNumber2($no4_5_3_4_5));

    		$no4_5_4_1_5 = $no4_5_4_1_1 + $no4_5_4_1_2 + $no4_5_4_1_3 + $no4_5_4_1_4;
    		$document->setValue('{no4_5_4_1_1}', $this->toformatNumber2($no4_5_4_1_1));
    		$document->setValue('{no4_5_4_1_2}', $this->toformatNumber2($no4_5_4_1_2));
    		$document->setValue('{no4_5_4_1_3}', $this->toformatNumber2($no4_5_4_1_3));
    		$document->setValue('{no4_5_4_1_4}', $this->toformatNumber2($no4_5_4_1_4));
    		$document->setValue('{no4_5_4_1_5}', $this->toformatNumber2($no4_5_4_1_5));

    		$no4_5_4_2_5 = $no4_5_4_2_1 + $no4_5_4_2_2 + $no4_5_4_2_3 + $no4_5_4_2_4;
    		$document->setValue('{no4_5_4_2_1}', $this->toformatNumber2($no4_5_4_2_1));
    		$document->setValue('{no4_5_4_2_2}', $this->toformatNumber2($no4_5_4_2_2));
    		$document->setValue('{no4_5_4_2_3}', $this->toformatNumber2($no4_5_4_2_3));
    		$document->setValue('{no4_5_4_2_4}', $this->toformatNumber2($no4_5_4_2_4));
    		$document->setValue('{no4_5_4_2_5}', $this->toformatNumber2($no4_5_4_2_5));

    		$no4_5_4_3_5 = $no4_5_4_3_1 + $no4_5_4_3_2 + $no4_5_4_3_3 + $no4_5_4_3_4;
    		$document->setValue('{no4_5_4_3_1}', $this->toformatNumber2($no4_5_4_3_1));
    		$document->setValue('{no4_5_4_3_2}', $this->toformatNumber2($no4_5_4_3_2));
    		$document->setValue('{no4_5_4_3_3}', $this->toformatNumber2($no4_5_4_3_3));
    		$document->setValue('{no4_5_4_3_4}', $this->toformatNumber2($no4_5_4_3_4));
    		$document->setValue('{no4_5_4_3_5}', $this->toformatNumber2($no4_5_4_3_5));

    		$no4_5_4_4_5 = $no4_5_4_4_1 + $no4_5_4_4_2 + $no4_5_4_4_3 + $no4_5_4_4_4;
    		$document->setValue('{no4_5_4_4_1}', $this->toformatNumber2($no4_5_4_4_1));
    		$document->setValue('{no4_5_4_4_2}', $this->toformatNumber2($no4_5_4_4_2));
    		$document->setValue('{no4_5_4_4_3}', $this->toformatNumber2($no4_5_4_4_3));
    		$document->setValue('{no4_5_4_4_4}', $this->toformatNumber2($no4_5_4_4_4));
    		$document->setValue('{no4_5_4_4_5}', $this->toformatNumber2($no4_5_4_4_5));

    		$document->setValue('{no4_6_1}', $no4_6_1);
    		$document->setValue('{no4_6_2}', $no4_6_2);
    		$document->setValue('{no4_6_3}', $no4_6_3);
    		$document->setValue('{no4_6_4}', $no4_6_4);
    		$document->setValue('{no4_6_5}', $no4_6_5);
    		$document->setValue('{no4_6_6}', $no4_6_6);
    		$document->setValue('{no4_6_7}', $no4_6_7);
    		$document->setValue('{no4_6_8_1}', $no4_6_8_1);
    		$document->setValue('{no4_6_8_2}', $no4_6_8_2);
    	
            $signingApprover = SigningApprover::findFirst(array("discovery_surveyid=?0 and group_session_id =?1","bind"=>array($this->discoverySurvey->id, 4)));        
            $document->setValue('{user}',$signingApprover->name);         
            $document->setValue('{phone}',$signingApprover->phone);     
            $document->setValue('{approver}',$this->discoverySurvey->signing_approver);
            $document->setValue('{phone2}',$this->discoverySurvey->approver_phone);
    		$result = $document->saveAs($this->tmp_file);   
    	 	$this->converttowordtemplate('FormNo4_',$this->tmp_file);

    }

    public function PrintFormNo5Action()
    {

        $this->view->disable();
        $no5_1_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>188,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_1_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>189,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_1_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>190,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_1_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>191,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_1_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>192,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_1_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>193,
                                2=>$this->discoverySurvey->id)))->answer;
        $no5_1_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>501,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_1_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>502,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>194,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>503,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>504,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>505,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>506,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>507,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>508,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_7 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>509,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_8 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>510,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_9 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>511,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_1_10 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>512,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>513,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>514,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>515,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>516,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>517,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>518,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_7 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>519,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_8 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>520,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_9 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>521,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_2_10 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>522,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>523,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>524,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>525,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>526,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>527,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>528,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_7 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>529,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_8 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>530,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_9 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>531,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_3_10 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>532,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>533,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>534,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>535,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>536,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>537,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>538,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_7 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>539,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_8 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>540,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_9 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>541,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_3_4_10 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>542,
                                2=>$this->discoverySurvey->id)))->answer;

        
//no5_4
        $no5_4_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>206,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_4_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>207,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_4_1_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>208,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_4_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>209,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_4_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>210,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_4_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>211,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_4_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>212,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_4_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>213,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_4_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>214,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>215,
                                2=>$this->discoverySurvey->id)))->answer;
//no5_5
        $no5_5_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>216,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_5_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>217,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_5_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>218,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_5_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>219,
                                2=>$this->discoverySurvey->id)))->answer;
//no5_6
        $no5_6_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>220,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_6_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>221,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_6_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>222,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_6_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>223,
                                2=>$this->discoverySurvey->id)))->answer;

        $no5_6_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>224,
                                2=>$this->discoverySurvey->id)))->answer;
    	
    	//die();
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
    		$document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo5.docx');
    		//$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo5.docx');
    		//var_dump(($document));die();
    		date_default_timezone_set('Asia/Bangkok');

    		$document->setValue('{year}', $this->year);
    		$document->setValue('{office}', $this->discoverySurvey->Office->name);
    		$document->setValue('{no5_1_1_1}', $no5_1_1_1);
    		$document->setValue('{no5_1_1_2}', $no5_1_1_2);
    		$document->setValue('{no5_1_2_1}', $no5_1_2_1);
    		$document->setValue('{no5_1_2_2}', $no5_1_2_2);
    		$document->setValue('{no5_1_3_1}', $no5_1_3_1);
    		$document->setValue('{no5_1_3_2}', $no5_1_3_2);
            $document->setValue('{no5_1_4_1}', $no5_1_4_1);
            $document->setValue('{no5_1_4_2}', $no5_1_4_2);

    		$document->setValue('{no5_2}', $no5_2);

    		$document->setValue('{no5311}', $no5_3_1_1);
    		$document->setValue('{no5312}', $no5_3_1_2);
    		$document->setValue('{no5313}', $no5_3_1_3);
    		$document->setValue('{no5314}', $no5_3_1_4);
    		$document->setValue('{no5315}', $no5_3_1_5);
    		$document->setValue('{no5316}', $no5_3_1_6);
    		$document->setValue('{no5317}', $no5_3_1_7);
    		$document->setValue('{no5318}', $no5_3_1_8);
    		$document->setValue('{no5319}', $no5_3_1_9);
    		$document->setValue('{no53110}', $no5_3_1_10);

            $document->setValue('{no5321}', $no5_3_2_1);
            $document->setValue('{no5322}', $no5_3_2_2);
            $document->setValue('{no5323}', $no5_3_2_3);
            $document->setValue('{no5324}', $no5_3_2_4);
            $document->setValue('{no5325}', $no5_3_2_5);
            $document->setValue('{no5326}', $no5_3_2_6);
            $document->setValue('{no5327}', $no5_3_2_7);
            $document->setValue('{no5328}', $no5_3_2_8);
            $document->setValue('{no5329}', $no5_3_2_9);
            $document->setValue('{no53210}', $no5_3_2_10);

            $document->setValue('{no5331}', $no5_3_3_1);
            $document->setValue('{no5332}', $no5_3_3_2);
            $document->setValue('{no5333}', $no5_3_3_3);
            $document->setValue('{no5334}', $no5_3_3_4);
            $document->setValue('{no5335}', $no5_3_3_5);
            $document->setValue('{no5336}', $no5_3_3_6);
            $document->setValue('{no5337}', $no5_3_3_7);
            $document->setValue('{no5338}', $no5_3_3_8);
            $document->setValue('{no5339}', $no5_3_3_9);
            $document->setValue('{no53310}', $no5_3_3_10);

            $document->setValue('{no5341}', $no5_3_4_1);
            $document->setValue('{no5342}', $no5_3_4_2);
            $document->setValue('{no5343}', $no5_3_4_3);
            $document->setValue('{no5344}', $no5_3_4_4);
            $document->setValue('{no5345}', $no5_3_4_5);
            $document->setValue('{no5346}', $no5_3_4_6);
            $document->setValue('{no5347}', $no5_3_4_7);
            $document->setValue('{no5348}', $no5_3_4_8);
            $document->setValue('{no5349}', $no5_3_4_9);
            $document->setValue('{no53410}', $no5_3_4_10);
    		

    		$document->setValue('{no5_4_1_1}', $this->toformatNumber2($no5_4_1_1));
    		$document->setValue('{no5_4_1_2}', $this->toformatNumber2($no5_4_1_2));
    		$document->setValue('{no5_4_1_3}', $this->toformatNumber2($no5_4_1_3));
    		$document->setValue('{no5_4_2_1}', $this->toformatNumber2($no5_4_2_1));
    		$document->setValue('{no5_4_2_2}', $this->toformatNumber2($no5_4_2_2));
    		$document->setValue('{no5_4_2_3}', $this->toformatNumber2($no5_4_2_3));
    		$document->setValue('{no5_4_3_1}', $this->toformatNumber2($no5_4_3_1));
    		$document->setValue('{no5_4_3_2}', $this->toformatNumber2($no5_4_3_2));
    		$document->setValue('{no5_4_3_3}', $this->toformatNumber2($no5_4_3_3));
    		$document->setValue('{no5_4_4}', $this->toformatNumber2($no5_4_4));

    		$document->setValue('{no5_5_1_1}', $this->toformatNumber2($no5_5_1_1));
    		$document->setValue('{no5_5_1_2}', $this->toformatNumber($no5_5_1_2));
    		$document->setValue('{no5_5_2_1}', $this->toformatNumber2($no5_5_2_1));
    		$document->setValue('{no5_5_2_2}', $this->toformatNumber($no5_5_2_2));

    		$document->setValue('{no5_6_1}', $no5_6_1);
    		$document->setValue('{no5_6_2}', $no5_6_2);
    		$document->setValue('{no5_6_3}', $no5_6_3);
    		$document->setValue('{no5_6_4}', $no5_6_4);
    		$document->setValue('{no5_6_5}', $no5_6_5);

       
            $signingApprover = SigningApprover::findFirst(array("discovery_surveyid=?0 and group_session_id =?1","bind"=>array($this->discoverySurvey->id, 5)));        
            $document->setValue('{user}',$signingApprover->name);         
            $document->setValue('{phone}',$signingApprover->phone);          
            $document->setValue('{approver}',$this->discoverySurvey->signing_approver);
            $document->setValue('{phone2}',$this->discoverySurvey->approver_phone);
    		$result = $document->saveAs($this->tmp_file);   
    		//die($result);
    	 	$this->converttowordtemplate('FormNo5_',$this->tmp_file);

    		//die();
    }

    public function PrintFormNo6Action()
    {
    	
      $this->view->disable();
    	$no6_1 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>225,
                        2=>$this->discoverySurvey->id)))->answer;
    	$no6_2 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>226,
                        2=>$this->discoverySurvey->id)))->answer;
    	$no6_3 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>227,
                        2=>$this->discoverySurvey->id)))->answer;
    	$no6_4 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>228,
                        2=>$this->discoverySurvey->id)))->answer;
    	$no6_5 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>229,
                        2=>$this->discoverySurvey->id)))->answer;
    	$no6_6 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>230,
                        2=>$this->discoverySurvey->id)))->answer;
    	$no6_7 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>231,
                        2=>$this->discoverySurvey->id)))->answer;
    	$no6_8 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>232,
                        2=>$this->discoverySurvey->id)))->answer;
    	$no6_9 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>233,
                        2=>$this->discoverySurvey->id)))->answer;
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
    		$document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo6.docx');
    		//$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo6.docx');
    		//var_dump(($document));die();
    		date_default_timezone_set('Asia/Bangkok');

    		$document->setValue('{year}', $this->year);
    		$document->setValue('{office}', $this->discoverySurvey->Office->name);
    		$document->setValue('{no6_1}', $no6_1);
    		$document->setValue('{no6_2}', $no6_2);
    		$document->setValue('{no6_3}', $no6_3);
    		$document->setValue('{no6_4}', $no6_4);
    		$document->setValue('{no6_5}', $no6_5);
    		$document->setValue('{no6_6}', $no6_6);
    		$document->setValue('{no6_7}', $no6_7);
    		$document->setValue('{no6_8}', $no6_8);
    		$document->setValue('{no6_9}', $no6_9);

            $signingApprover = SigningApprover::findFirst(array("discovery_surveyid=?0 and group_session_id =?1","bind"=>array($this->discoverySurvey->id, 6)));        
            $document->setValue('{user}',$signingApprover->name);         
            $document->setValue('{phone}',$signingApprover->phone);       
            $document->setValue('{approver}',$this->discoverySurvey->signing_approver);
            $document->setValue('{phone2}',$this->discoverySurvey->approver_phone);
    		$result = $document->saveAs($this->tmp_file);   
    	 	$this->converttowordtemplate('FormNo6_',$this->tmp_file);

    }

    public function PrintFormNo7Action()
    {
      $this->view->disable();
      $no7_1 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>234,
                        2=>$this->discoverySurvey->id)))->answer;
      $no7_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>235,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>236,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>237,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>497,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>498,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>499,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>500,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_1_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>238,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_1_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>239,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_1_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>240,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_1_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>241,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>242,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>243,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>244,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_2_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>245,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_3_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>246,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_3_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>247,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_3_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>248,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_3_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>249,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_4_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>250,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_4_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>251,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_4_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>252,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_4_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>253,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_5_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>254,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_5_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>255,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_5_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>256,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_5_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>257,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_6_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>413,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_6_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>414,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_6_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>415,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_6_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>416,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_7_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>417,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_7_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>418,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_7_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>419,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_7_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>420,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_8_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>421,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_8_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>422,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_8_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>423,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_8_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>424,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_9_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>425,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_9_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>426,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_9_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>427,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_9_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>428,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_10_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>429,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_10_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>430,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_10_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>431,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_3_10_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>432,
                              2=>$this->discoverySurvey->id)))->answer;


      $no7_4_1_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>258,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_1_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>259,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_1_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>260,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_1_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>261,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>262,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>263,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>264,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_2_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>265,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_3_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>266,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_3_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>267,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_3_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>268,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_3_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>269,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_4_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>270,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_4_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>271,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_4_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>272,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_4_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>273,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_5_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>274,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_5_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>275,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_5_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>276,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_5_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>277,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_6_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>433,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_6_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>434,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_6_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>435,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_6_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>436,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_7_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>437,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_7_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>438,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_7_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>439,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_7_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>440,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_8_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>441,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_8_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>442,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_8_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>443,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_8_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>444,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_9_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>445,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_9_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>446,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_9_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>447,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_9_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>448,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_10_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>449,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_10_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>450,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_10_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>451,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_4_10_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>452,
                              2=>$this->discoverySurvey->id)))->answer;

      $no7_5_1_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>278,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_1_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>279,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_1_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>280,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_1_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>281,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>282,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>283,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>284,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_2_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>285,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_3_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>286,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_3_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>287,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_3_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>288,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_3_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>289,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_4_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>290,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_4_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>291,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_4_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>292,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_4_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>293,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_5_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>294,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_5_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>295,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_5_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>296,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_5_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>297,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_6_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>453,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_6_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>454,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_6_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>455,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_6_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>456,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_7_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>457,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_7_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>458,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_7_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>459,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_7_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>460,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_8_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>461,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_8_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>462,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_8_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>463,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_8_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>464,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_9_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>465,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_9_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>466,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_9_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>467,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_9_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>468,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_10_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>469,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_10_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>470,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_10_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>471,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_5_10_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>472,
                              2=>$this->discoverySurvey->id)))->answer;

      $no7_6_1_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>298,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_1_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>299,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_1_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>300,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_1_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>301,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>302,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>303,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>304,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_2_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>305,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_3_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>306,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_3_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>307,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_3_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>308,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_3_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>309,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_4_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>310,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_4_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>311,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_4_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>312,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_4_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>313,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_5_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>314,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_5_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>315,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_5_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>316,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_5_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>317,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_6_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>473,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_6_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>474,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_6_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>475,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_6_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>476,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_7_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>477,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_7_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>478,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_7_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>479,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_7_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>480,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_8_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>481,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_8_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>482,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_8_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>483,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_8_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>484,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_9_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>485,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_9_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>486,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_9_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>487,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_9_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>488,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_10_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>489,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_10_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>490,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_10_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>491,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_6_10_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>492,
                              2=>$this->discoverySurvey->id)))->answer;

      $no7_7 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>318,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_8 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>319,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_9 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>320,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_10 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>321,
                              2=>$this->discoverySurvey->id)))->answer;
      $no7_11 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>322,
                              2=>$this->discoverySurvey->id)))->answer;
      
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo7.docx');
        //$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo2.docx');
        //var_dump(($document));die();
        date_default_timezone_set('Asia/Bangkok');

        $document->setValue('{year}', $this->year);
        $document->setValue('{office}', $this->discoverySurvey->Office->name);
        $document->setValue('{no7_1}', $no7_1);
        $document->setValue('{no7_2_1}', $this->toformatNumber2($no7_2_1));
        $document->setValue('{no7_2_2}', $this->toformatNumber2($no7_2_2));
        $document->setValue('{no7_2_3}', $this->toformatNumber($no7_2_3));
        $document->setValue('{no7_3}', $no7_3);
        $document->setValue('{no7311}', $this->toformatNumber2($no7_3_1_1));
        $document->setValue('{no7312}', $no7_3_1_2);
        $document->setValue('{no7313}', $no7_3_1_3);
        $document->setValue('{no7314}', $this->toformatNumber($no7_3_1_4));
        $document->setValue('{no7321}', $this->toformatNumber2($no7_3_2_1));
        $document->setValue('{no7322}', $no7_3_2_2);
        $document->setValue('{no7323}', $no7_3_2_3);
        $document->setValue('{no7324}', $this->toformatNumber($no7_3_2_4));
        $document->setValue('{no7331}', $this->toformatNumber2($no7_3_3_1));
        $document->setValue('{no7332}', $no7_3_3_2);
        $document->setValue('{no7333}', $no7_3_3_3);
        $document->setValue('{no7334}', $this->toformatNumber($no7_3_3_4));
        $document->setValue('{no7341}', $this->toformatNumber2($no7_3_4_1));
        $document->setValue('{no7342}', $no7_3_4_2);
        $document->setValue('{no7343}', $no7_3_4_3);
        $document->setValue('{no7344}', $this->toformatNumber($no7_3_4_4));
        $document->setValue('{no7351}', $this->toformatNumber2($no7_3_5_1));
        $document->setValue('{no7352}', $no7_3_5_2);
        $document->setValue('{no7353}', $no7_3_5_3);
        $document->setValue('{no7354}', $this->toformatNumber($no7_3_5_4));
        $document->setValue('{no7361}', $this->toformatNumber2($no7_3_6_1));
        $document->setValue('{no7362}', $no7_3_6_2);
        $document->setValue('{no7363}', $no7_3_6_3);
        $document->setValue('{no7364}', $this->toformatNumber($no7_3_6_4));
        $document->setValue('{no7371}', $this->toformatNumber2($no7_3_7_1));
        $document->setValue('{no7372}', $no7_3_7_2);
        $document->setValue('{no7373}', $no7_3_7_3);
        $document->setValue('{no7374}', $this->toformatNumber($no7_3_7_4));
        $document->setValue('{no7381}', $this->toformatNumber2($no7_3_8_1));
        $document->setValue('{no7382}', $no7_3_8_2);
        $document->setValue('{no7383}', $no7_3_8_3);
        $document->setValue('{no7384}', $this->toformatNumber($no7_3_8_4));
        $document->setValue('{no7391}', $this->toformatNumber2($no7_3_9_1));
        $document->setValue('{no7392}', $no7_3_9_2);
        $document->setValue('{no7393}', $no7_3_9_3);
        $document->setValue('{no7394}', $this->toformatNumber($no7_3_9_4));
        $document->setValue('{no73101}', $this->toformatNumber2($no7_3_10_1));
        $document->setValue('{no73102}', $no7_3_10_2);
        $document->setValue('{no73103}', $no7_3_10_3);
        $document->setValue('{no73104}', $this->toformatNumber($no7_3_10_4));

        $document->setValue('{no7_4}', $no7_4);
        $document->setValue('{no7411}', $this->toformatNumber2($no7_4_1_1));
        $document->setValue('{no7412}', $no7_4_1_2);
        $document->setValue('{no7413}', $no7_4_1_3);
        $document->setValue('{no7414}', $this->toformatNumber($no7_4_1_4));
        $document->setValue('{no7421}', $this->toformatNumber2($no7_4_2_1));
        $document->setValue('{no7422}', $no7_4_2_2);
        $document->setValue('{no7423}', $no7_4_2_3);
        $document->setValue('{no7424}', $this->toformatNumber($no7_4_2_4));
        $document->setValue('{no7431}', $this->toformatNumber2($no7_4_3_1));
        $document->setValue('{no7432}', $no7_4_3_2);
        $document->setValue('{no7433}', $no7_4_3_3);
        $document->setValue('{no7434}', $this->toformatNumber($no7_4_3_4));
        $document->setValue('{no7441}', $this->toformatNumber2($no7_4_4_1));
        $document->setValue('{no7442}', $no7_4_4_2);
        $document->setValue('{no7443}', $no7_4_4_3);
        $document->setValue('{no7444}', $this->toformatNumber($no7_4_4_4));
        $document->setValue('{no7451}', $this->toformatNumber2($no7_4_5_1));
        $document->setValue('{no7452}', $no7_4_5_2);
        $document->setValue('{no7453}', $no7_4_5_3);
        $document->setValue('{no7454}', $this->toformatNumber($no7_4_5_4));
        $document->setValue('{no7461}', $this->toformatNumber2($no7_4_6_1));
        $document->setValue('{no7462}', $no7_4_6_2);
        $document->setValue('{no7463}', $no7_4_6_3);
        $document->setValue('{no7464}', $this->toformatNumber($no7_4_6_4));
        $document->setValue('{no7471}', $this->toformatNumber2($no7_4_7_1));
        $document->setValue('{no7472}', $no7_4_7_2);
        $document->setValue('{no7473}', $no7_4_7_3);
        $document->setValue('{no7474}', $this->toformatNumber($no7_4_7_4));
        $document->setValue('{no7481}', $this->toformatNumber2($no7_4_8_1));
        $document->setValue('{no7482}', $no7_4_8_2);
        $document->setValue('{no7483}', $no7_4_8_3);
        $document->setValue('{no7484}', $this->toformatNumber($no7_4_8_4));
        $document->setValue('{no7491}', $this->toformatNumber2($no7_4_9_1));
        $document->setValue('{no7492}', $no7_4_9_2);
        $document->setValue('{no7493}', $no7_4_9_3);
        $document->setValue('{no7494}', $this->toformatNumber($no7_4_9_4));
        $document->setValue('{no74101}', $this->toformatNumber2($no7_4_10_1));
        $document->setValue('{no74102}', $no7_4_10_2);
        $document->setValue('{no74103}', $no7_4_10_3);
        $document->setValue('{no74104}', $this->toformatNumber($no7_4_10_4));

        $document->setValue('{no7_5}', $no7_5);
        //die($no7_5."OK");
        $document->setValue('{no7511}', $this->toformatNumber2($no7_5_1_1));
        $document->setValue('{no7512}', $no7_5_1_2);
        $document->setValue('{no7513}', $no7_5_1_3);
        $document->setValue('{no7514}', $this->toformatNumber($no7_5_1_4));
        $document->setValue('{no7521}', $this->toformatNumber2($no7_5_2_1));
        $document->setValue('{no7522}', $no7_5_2_2);
        $document->setValue('{no7523}', $no7_5_2_3);
        $document->setValue('{no7524}', $this->toformatNumber($no7_5_2_4));
        $document->setValue('{no7531}', $this->toformatNumber2($no7_5_3_1));
        $document->setValue('{no7532}', $no7_5_3_2);
        $document->setValue('{no7533}', $no7_5_3_3);
        $document->setValue('{no7534}', $this->toformatNumber($no7_5_3_4));
        $document->setValue('{no7541}', $this->toformatNumber2($no7_5_4_1));
        $document->setValue('{no7542}', $no7_5_4_2);
        $document->setValue('{no7543}', $no7_5_4_3);
        $document->setValue('{no7544}', $this->toformatNumber($no7_5_4_4));
        $document->setValue('{no7551}', $this->toformatNumber2($no7_5_5_1));
        $document->setValue('{no7552}', $no7_5_5_2);
        $document->setValue('{no7553}', $no7_5_5_3);
        $document->setValue('{no7554}', $this->toformatNumber($no7_5_5_4));
        $document->setValue('{no7561}', $this->toformatNumber2($no7_5_6_1));
        $document->setValue('{no7562}', $no7_5_6_2);
        $document->setValue('{no7563}', $no7_5_6_3);
        $document->setValue('{no7564}', $this->toformatNumber($no7_5_6_4));
        $document->setValue('{no7571}', $this->toformatNumber2($no7_5_7_1));
        $document->setValue('{no7572}', $no7_5_7_2);
        $document->setValue('{no7573}', $no7_5_7_3);
        $document->setValue('{no7574}', $this->toformatNumber($no7_5_7_4));
        $document->setValue('{no7581}', $this->toformatNumber2($no7_5_8_1));
        $document->setValue('{no7582}', $no7_5_8_2);
        $document->setValue('{no7583}', $no7_5_8_3);
        $document->setValue('{no7584}', $this->toformatNumber($no7_5_8_4));
        $document->setValue('{no7591}', $this->toformatNumber2($no7_5_9_1));
        $document->setValue('{no7592}', $no7_5_9_2);
        $document->setValue('{no7593}', $no7_5_9_3);
        $document->setValue('{no7594}', $this->toformatNumber($no7_5_9_4));
        $document->setValue('{no75101}', $this->toformatNumber2($no7_5_10_1));
        $document->setValue('{no75102}', $no7_5_10_2);
        $document->setValue('{no75103}', $no7_5_10_3);
        $document->setValue('{no75104}', $this->toformatNumber($no7_5_10_4));

        $document->setValue('{no7_6}', $no7_6);
        $document->setValue('{no7611}', $this->toformatNumber2($no7_6_1_1));
        $document->setValue('{no7612}', $no7_6_1_2);
        $document->setValue('{no7613}', $no7_6_1_3);
        $document->setValue('{no7614}', $this->toformatNumber($no7_6_1_4));
        $document->setValue('{no7621}', $this->toformatNumber2($no7_6_2_1));
        $document->setValue('{no7622}', $no7_6_2_2);
        $document->setValue('{no7623}', $no7_6_2_3);
        $document->setValue('{no7624}', $this->toformatNumber($no7_6_2_4));
        $document->setValue('{no7631}', $this->toformatNumber2($no7_6_3_1));
        $document->setValue('{no7632}', $no7_6_3_2);
        $document->setValue('{no7633}', $no7_6_3_3);
        $document->setValue('{no7634}', $this->toformatNumber($no7_6_3_4));
        $document->setValue('{no7641}', $this->toformatNumber2($no7_6_4_1));
        $document->setValue('{no7642}', $no7_6_4_2);
        $document->setValue('{no7643}', $no7_6_4_3);
        $document->setValue('{no7644}', $this->toformatNumber($no7_6_4_4));
        $document->setValue('{no7651}', $this->toformatNumber2($no7_6_5_1));
        $document->setValue('{no7652}', $no7_6_5_2);
        $document->setValue('{no7653}', $no7_6_5_3);
        $document->setValue('{no7654}', $this->toformatNumber($no7_6_5_4));
        $document->setValue('{no7661}', $this->toformatNumber2($no7_6_6_1));
        $document->setValue('{no7662}', $no7_6_6_2);
        $document->setValue('{no7663}', $no7_6_6_3);
        $document->setValue('{no7664}', $this->toformatNumber($no7_6_6_4));
        $document->setValue('{no7671}', $this->toformatNumber2($no7_6_7_1));
        $document->setValue('{no7672}', $no7_6_7_2);
        $document->setValue('{no7673}', $no7_6_7_3);
        $document->setValue('{no7674}', $this->toformatNumber($no7_6_7_4));
        $document->setValue('{no7681}', $this->toformatNumber2($no7_6_8_1));
        $document->setValue('{no7682}', $no7_6_8_2);
        $document->setValue('{no7683}', $no7_6_8_3);
        $document->setValue('{no7684}', $this->toformatNumber($no7_6_8_4));
        $document->setValue('{no7691}', $this->toformatNumber2($no7_6_9_1));
        $document->setValue('{no7692}', $no7_6_9_2);
        $document->setValue('{no7693}', $no7_6_9_3);
        $document->setValue('{no7694}', $this->toformatNumber($no7_6_9_4));
        $document->setValue('{no76101}', $this->toformatNumber2($no7_6_10_1));
        $document->setValue('{no76102}', $no7_6_10_2);
        $document->setValue('{no76103}', $no7_6_10_3);
        $document->setValue('{no76104}', $this->toformatNumber($no7_6_10_4));

        $document->setValue('{no7_7}', $no7_7);
        $document->setValue('{no7_8}', $no7_8);
        $document->setValue('{no7_9}', $no7_9);
        $document->setValue('{no7_10}', $no7_10);
        $document->setValue('{no7_11}', $no7_11);

        
        $signingApprover = SigningApprover::findFirst(array("discovery_surveyid=?0 and group_session_id =?1","bind"=>array($this->discoverySurvey->id, 7)));        
        $document->setValue('{user}',$signingApprover->name);         
        $document->setValue('{phone}',$signingApprover->phone);       
        $document->setValue('{approver}',$this->discoverySurvey->signing_approver);
        $document->setValue('{phone2}',$this->discoverySurvey->approver_phone);
        $result = $document->saveAs($this->tmp_file);   
        $this->converttowordtemplate('FormNo7_',$this->tmp_file);
    }

    public function PrintFormNo8Action()
    {
      $this->view->disable();
      $no8_1_1_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>323,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_1_1_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>324,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_1_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>325,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_1_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>326,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_1_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>327,
                      2=>$this->discoverySurvey->id)))->answer;

        //no8_2
      $no8_2_1_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>328,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_2_1_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>329,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_2_1_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>330,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_2_2_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>331,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_2_2_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>332,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_2_2_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>333,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_2_3_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>334,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_2_3_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>335,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_2_3_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>336,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>337,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>386,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>387,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>388,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>389,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_5 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>390,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_6 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>391,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_7 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>392,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_8 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>393,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_9 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>394,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_4_10 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>395,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_11 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>543,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_12 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>544,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_13 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>545,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_14 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>546,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_15 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>547,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_16 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>548,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_17 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>549,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_18 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>550,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_19 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>551,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_20 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>552,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_21 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>555,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_22 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>556,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_23 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>557,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_24 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>558,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_25 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>559,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_26 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>560,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_27 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>561,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_28 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>562,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_29 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>563,
                      2=>$this->discoverySurvey->id)))->answer;
      $no8_4_30 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>564,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_5_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>338,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_5_2_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>339,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_5_2_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>340,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_5_2_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>341,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_5_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>342,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_5_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>343,
                      2=>$this->discoverySurvey->id)))->answer;

        //no8_6
      $no8_6_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>344,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_6_2_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>345,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_6_2_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>346,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_6_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>347,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_6_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>348,
                      2=>$this->discoverySurvey->id)))->answer;

        //no8_7
      $no8_7_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>349,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>350,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>351,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>352,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_5 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>353,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_6 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>354,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_7 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>355,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_8 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>356,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_9 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>357,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_10 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>358,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_11 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>359,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_12_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>360,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_12_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>396,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_13_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>361,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_13_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>362,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_14 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>363,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_15 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>364,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_16 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>365,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_17_1_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>366,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_17_1_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>367,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_17_2_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>368,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_17_2_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>369,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_18 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>370,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_19 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>371,
                      2=>$this->discoverySurvey->id)))->answer;

      $no8_7_20 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>372,
                      2=>$this->discoverySurvey->id)))->answer;
      
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo8.docx');
        //$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo2.docx');
        //var_dump(($document));die();
        date_default_timezone_set('Asia/Bangkok');

        $document->setValue('{year}', $this->year);
        $document->setValue('{office}', $this->discoverySurvey->Office->name);
        $document->setValue('{no8_1_1_1}', $no8_1_1_1);
        $document->setValue('{no8_1_1_2}', $no8_1_1_2);
        $document->setValue('{no8_1_2}', $no8_1_2);
        $document->setValue('{no8_1_3}', $no8_1_3);
        $document->setValue('{no8_1_4}', $no8_1_4);
        $document->setValue('{no8_2_1_1}', $no8_2_1_1);
        $document->setValue('{no8_2_1_2}', $no8_2_1_2);
        $document->setValue('{no8_2_1_3}', $no8_2_1_3);
        $document->setValue('{no8_2_2_1}', $no8_2_3_1);
        $document->setValue('{no8_2_2_2}', $no8_2_3_2);
        $document->setValue('{no8_2_2_3}', $no8_2_3_3);
        $document->setValue('{no8_2_3_1}', $no8_2_3_1);
        $document->setValue('{no8_2_3_2}', $no8_2_3_2);
        $document->setValue('{no8_2_3_3}', $no8_2_3_3);
        $document->setValue('{no8_4}', $no8_4);
        $document->setValue('{no8_4_1}', $no8_4_1);
        $document->setValue('{no8_4_2}', $no8_4_2);
        $document->setValue('{no8_4_3}', $no8_4_3);
        $document->setValue('{no8_4_4}', $no8_4_4);
        $document->setValue('{no8_4_5}', $no8_4_5);
        $document->setValue('{no8_4_6}', $no8_4_6);
        $document->setValue('{no8_4_7}', $no8_4_7);
        $document->setValue('{no8_4_8}', $no8_4_8);
        $document->setValue('{no8_4_9}', $no8_4_9);
        $document->setValue('{no8_4_10}', $no8_4_10);
        $document->setValue('{no8411}', $no8_4_11);
        $document->setValue('{no8412}', $no8_4_12);
        $document->setValue('{no8413}', $no8_4_13);
        $document->setValue('{no8414}', $no8_4_14);
        $document->setValue('{no8415}', $no8_4_15);
        $document->setValue('{no8416}', $no8_4_16);
        $document->setValue('{no8417}', $no8_4_17);
        $document->setValue('{no8418}', $no8_4_18);
        $document->setValue('{no8419}', $no8_4_19);
        $document->setValue('{no8420}', $no8_4_20);
        $document->setValue('{no8421}', $no8_4_21);
        $document->setValue('{no8422}', $no8_4_22);
        $document->setValue('{no8423}', $no8_4_23);
        $document->setValue('{no8424}', $no8_4_24);
        $document->setValue('{no8425}', $no8_4_25);
        $document->setValue('{no8426}', $no8_4_26);
        $document->setValue('{no8427}', $no8_4_27);
        $document->setValue('{no8428}', $no8_4_28);
        $document->setValue('{no8429}', $no8_4_29);
        $document->setValue('{no8430}', $no8_4_30);

        $document->setValue('{no8_5_1}', $no8_5_1);
        $document->setValue('{no8_5_2_1}', $no8_5_2_1);
        $document->setValue('{no8_5_2_2}', $this->thaiMonth($no8_5_2_2));
        $document->setValue('{no8_5_2_3}', $this->thaiMonth($no8_5_2_3));
        $document->setValue('{no8_5_3}', $no8_5_3);
        $document->setValue('{no8_5_4}', $no8_5_4);

        $document->setValue('{no8_6_1}', $no8_6_1);
        $document->setValue('{no8_6_2_1}', $no8_6_2_1);
        $document->setValue('{no8_6_2_2}', $no8_6_2_2);
        $document->setValue('{no8_6_3}', $no8_6_3);
        $document->setValue('{no8_6_4}', $no8_6_4);

        $document->setValue('{no8_7_1}', $no8_7_1);
        $document->setValue('{no8_7_2}', $no8_7_2);
        $document->setValue('{no8_7_3}', $no8_7_3);
        $document->setValue('{no8_7_4}', $no8_7_4);
        $document->setValue('{no8_7_5}', $no8_7_5);
        $document->setValue('{no8_7_6}', $no8_7_6);

        if($no8_7_7 == "yes")
          $no8_7_7 = "ใช้";
        else if($no8_7_7 == "no")
          $no8_7_7 = "ไม่ใช้";
        else
            $no8_7_7 = "";

        $document->setValue('{no8_7_7}', $no8_7_7);

        if($no8_7_8 == "yes")
          $no8_7_8 = "ใช้";
        else if($no8_7_8 == "no")
          $no8_7_8 = "ไม่ใช้";
        else
            $no8_7_8 = "";
        $document->setValue('{no8_7_8}', $no8_7_8);

        if($no8_7_9 == "yes")
          $no8_7_9 = "ใช้";
        else if($no8_7_9 == "no")
          $no8_7_9 = "ไม่ใช้";
        else
            $no8_7_9 = "";
        $document->setValue('{no8_7_9}', $no8_7_9);

        if($no8_7_10 == "yes")
          $no8_7_10 = "ใช้";
        else if($no8_7_10 == "no")
          $no8_7_10 = "ไม่ใช้";
        else
            $no8_7_10 = "";
        $document->setValue('{no8_7_10}', $no8_7_10);

        if($no8_7_11 == "yes")
          $no8_7_11 = "ใช้";
        else if($no8_7_11 == "no")
          $no8_7_11 = "ไม่ใช้";
        else
            $no8_7_11 = "";
        $document->setValue('{no8_7_11}', $no8_7_11);

        $document->setValue('{no8_7_12_1}', $no8_7_12_1);

        if($no8_7_12_2 == "yes")
          $no8_7_12_2 = "ใช้";
        else if($no8_7_12_2 == "no")
          $no8_7_12_2 = "ไม่ใช่";
        else
            $no8_7_12_2 = "";
        $document->setValue('{no8_7_12_2}', $no8_7_12_2);

        $document->setValue('{no8_7_13_1}', $no8_7_13_1);
        $document->setValue('{no8_7_13_2}', $no8_7_13_2);
        $document->setValue('{no8_7_14}', $no8_7_14);
        $document->setValue('{no8_7_15}', $no8_7_15);
        $document->setValue('{no8_7_16}', $no8_7_16);
        $document->setValue('{no8_7_17_1_1}', $no8_7_17_1_1);
        $document->setValue('{no8_7_17_1_2}', $this->toformatNumber($no8_7_17_1_2));
        $document->setValue('{no8_7_17_2_1}', $no8_7_17_2_1);
        $document->setValue('{no8_7_17_2_2}', $this->toformatNumber($no8_7_17_2_2));
        $document->setValue('{no8_7_18}', $no8_7_18);
        $document->setValue('{no8_7_19}', $this->toformatNumber($no8_7_19));
        $document->setValue('{no8_7_20}', $this->toformatNumber($no8_7_20));
       
        $signingApprover = SigningApprover::findFirst(array("discovery_surveyid=?0 and group_session_id =?1","bind"=>array($this->discoverySurvey->id, 8)));        
        $document->setValue('{user}',$signingApprover->name);         
        $document->setValue('{phone}',$signingApprover->phone);     
        $document->setValue('{approver}',$this->discoverySurvey->signing_approver);
        $document->setValue('{phone2}',$this->discoverySurvey->approver_phone);
        $result = $document->saveAs($this->tmp_file);
        $this->converttowordtemplate('FormNo8_',$this->tmp_file);
    }

    public function PrintFormNo9Action()
    {
        $this->view->disable();
        $no9_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>373,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>374,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>375,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>376,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_1_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>400,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>401,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>402,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>403,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>404,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>405,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>406,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>407,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>408,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>409,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_5_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>410,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_5_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>411,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_3_5_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>412,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>377,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>378,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>379,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>380,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_4_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>381,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_5_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>382,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_5_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>383,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_5_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>384,
                                2=>$this->discoverySurvey->id)))->answer;
        $no9_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>385,
                                2=>$this->discoverySurvey->id)))->answer;
      
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FormNo9.docx');
        //$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo2.docx');
        //var_dump(($document));die();
        date_default_timezone_set('Asia/Bangkok');

        $document->setValue('{year}', $this->year);
        $document->setValue('{office}', $this->discoverySurvey->Office->name);
        $document->setValue('{no9_1}', $no9_1);
        $document->setValue('{no9_2}', $no9_2);
        $document->setValue('{no9_3_1_1}', $no9_3_1_1);
        $document->setValue('{no9_3_1_2}', $this->toformatNumber($no9_3_1_2));
        $document->setValue('{no9_3_1_3}', $this->toformatNumber($no9_3_1_3));
        $document->setValue('{no9_3_2_1}', $no9_3_2_1);
        $document->setValue('{no9_3_2_2}', $this->toformatNumber($no9_3_2_2));
        $document->setValue('{no9_3_2_3}', $this->toformatNumber($no9_3_2_3));
        $document->setValue('{no9_3_3_1}', $no9_3_3_1);
        $document->setValue('{no9_3_3_2}', $this->toformatNumber($no9_3_3_2));
        $document->setValue('{no9_3_3_3}', $this->toformatNumber($no9_3_3_3));
        $document->setValue('{no9_3_4_1}', $no9_3_4_1);
        $document->setValue('{no9_3_4_2}', $this->toformatNumber($no9_3_4_2));
        $document->setValue('{no9_3_4_3}', $this->toformatNumber($no9_3_4_3));
        $document->setValue('{no9_3_5_1}', $no9_3_5_1);
        $document->setValue('{no9_3_5_2}', $this->toformatNumber($no9_3_5_2));
        $document->setValue('{no9_3_5_3}', $this->toformatNumber($no9_3_5_3));
        $document->setValue('{no9_4_1}', $this->toformatNumber($no9_4_1));
        $document->setValue('{no9_4_2}', $this->toformatNumber($no9_4_2));
        $document->setValue('{no9_4_3}', $this->toformatNumber($no9_4_3));
        $document->setValue('{no9_4_4}', $this->toformatNumber($no9_4_4));

        //$no9_4_5 = (int)($no9_4_1) + (int)($no9_4_2) + (int)($no9_4_3) + (int)($no9_4_4);
        $document->setValue('{no9_4_5}', $this->toformatNumber($no9_4_5));
        $document->setValue('{no9_5_1}', $no9_5_1);
        $document->setValue('{no9_5_2}', $no9_5_2);
        $document->setValue('{no9_5_3}', $no9_5_3);
        /*$no9_6 = '<w:p>
<w:pPr>
<w:jc w:val="center">
</w:pPr>
<w:r>
<w:rPr>
<w:b/>
</w:rPr>
<w:t>This is text.</w:t>
</w:r>
</w:p>';
        $document->setXML('{no9_6}', $no9_6 );*/
        $document->setValue('{no9_6}', htmlspecialchars($no9_6) );

        $signingApprover = SigningApprover::findFirst(array("discovery_surveyid=?0 and group_session_id =?1","bind"=>array($this->discoverySurvey->id, 9)));        
        $document->setValue('{user}',$signingApprover->name);         
        $document->setValue('{phone}',$signingApprover->phone);            
        $document->setValue('{approver}',$this->discoverySurvey->signing_approver);
        $document->setValue('{phone2}',$this->discoverySurvey->approver_phone);

        $result = $document->saveAs($this->tmp_file);   
        $this->converttowordtemplate('FormNo9_',$this->tmp_file);
    }

    public function indexAction()
    {
        /*$phpWord = new \PhpOffice\PhpWord\PhpWord();
        
		$document = new \PhpOffice\PhpWord\TemplateProcessor('/var/www/phalcon/app/modules/ClinicAdmin/Form/FormNo6.docx');
		//$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo6.docx');
		//var_dump(($document));die();
		date_default_timezone_set('Asia/Bangkok');

		$document->setValue('{startdate}', "today");

		$tmp_file = 'helloWorld.docx';
		$result = $document->saveAs($tmp_file);   
		//die($result);
	 	$this->converttowordtemplate('reportWorkrecordProfile',$tmp_file);*/



		
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