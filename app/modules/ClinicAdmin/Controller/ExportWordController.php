<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use PhpOffice\PhpWord;
use Clinic\Model\Answer;
use Clinic\Model\Survey;

class ExportWordController extends Controller
{

    public function initialize()
    {
        
        $this->setAdminEnvironment();
        $this->view->languages_disabled = true;


    }

    public function PrintFormNo4Action()
    {
    	$surveyid = $this->session->get('surveyid');
    	$discovery_surveyid = $this->session->get('discovery_surveyid');
    	//echo $surveyid."--".$discovery_surveyid;

    	$year = Survey::findFirst("id = {$surveyid}")->no;

            $no4_1 = Answer::findFirst(
                    array("questionid=?1 and discovery_surveyid=?2",
                        "bind"=>array(
                            1=>74,
                            2=>$surveyid)))->answer;

            $no4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>75,
                                    2=>$surveyid)))->answer;
            //die($no4_2);
            $no4_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>76,
                                    2=>$surveyid)))->answer;

            $no4_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>77,
                                    2=>$surveyid)))->answer;

            $no4_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>78,
                                    2=>$surveyid)))->answer;

            $no4_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>79,
                                    2=>$surveyid)))->answer;

            $no4_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>80,
                                    2=>$surveyid)))->answer;

            $no4_3_6 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>81,
                                    2=>$surveyid)))->answer;

            $no4_3_7 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>82,
                                    2=>$surveyid)))->answer;

            $no4_3_8 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>83,
                                    2=>$surveyid)))->answer;

            $no4_4_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>84,
                                    2=>$surveyid)))->answer;

            $no4_4_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>85,
                                    2=>$surveyid)))->answer;

            $no4_4_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>86,
                                    2=>$surveyid)))->answer;

            $no4_4_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>87,
                                    2=>$surveyid)))->answer;

            $no4_4_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>88,
                                    2=>$surveyid)))->answer;

            $no4_4_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>89,
                                    2=>$surveyid)))->answer;

            $no4_4_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>90,
                                    2=>$surveyid)))->answer;

            $no4_4_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>91,
                                    2=>$surveyid)))->answer;

            $no4_4_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>92,
                                    2=>$surveyid)))->answer;

            $no4_4_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>93,
                                    2=>$surveyid)))->answer;

            $no4_4_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>94,
                                    2=>$surveyid)))->answer;

            $no4_4_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>95,
                                    2=>$surveyid)))->answer;

            $no4_4_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>96,
                                    2=>$surveyid)))->answer;

            $no4_4_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>97,
                                    2=>$surveyid)))->answer;

            $no4_4_5_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>98,
                                    2=>$surveyid)))->answer;

            $no4_5_1_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>99,
                                    2=>$surveyid)))->answer;

            $no4_5_1_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>100,
                                    2=>$surveyid)))->answer;

            $no4_5_1_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>101,
                                    2=>$surveyid)))->answer;

            $no4_5_1_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>102,
                                    2=>$surveyid)))->answer;

            /*$no4_5_1_1_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>103,
                                    2=>$surveyid)))->answer;*/

            $no4_5_1_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>104,
                                    2=>$surveyid)))->answer;

            $no4_5_1_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>105,
                                    2=>$surveyid)))->answer;

            $no4_5_1_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>106,
                                    2=>$surveyid)))->answer;

            $no4_5_1_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>107,
                                    2=>$surveyid)))->answer;

            /*$no4_5_1_2_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>108,
                                    2=>$surveyid)))->answer;*/

            $no4_5_1_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>109,
                                    2=>$surveyid)))->answer;

            $no4_5_1_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>110,
                                    2=>$surveyid)))->answer;

            $no4_5_1_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>111,
                                    2=>$surveyid)))->answer;

            $no4_5_1_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>112,
                                    2=>$surveyid)))->answer;

            /*$no4_5_1_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>113,
                                    2=>$surveyid)))->answer;*/

            $no4_5_1_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>114,
                                    2=>$surveyid)))->answer;

            $no4_5_1_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>115,
                                    2=>$surveyid)))->answer;

            $no4_5_1_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>116,
                                    2=>$surveyid)))->answer;

            $no4_5_1_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>117,
                                    2=>$surveyid)))->answer;

            /*$no4_5_1_4_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>118,
                                    2=>$surveyid)))->answer;*/

//no4_5_2
            $no4_5_2_1_1 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>119,
                        2=>$surveyid)))->answer;

            $no4_5_2_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>120,
                                    2=>$surveyid)))->answer;

            $no4_5_2_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>121,
                                    2=>$surveyid)))->answer;

            $no4_5_2_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>122,
                                    2=>$surveyid)))->answer;

            /*$no4_5_2_1_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>123,
                                    2=>$surveyid)))->answer;*/

            $no4_5_2_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>124,
                                    2=>$surveyid)))->answer;

            $no4_5_2_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>125,
                                    2=>$surveyid)))->answer;

            $no4_5_2_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>126,
                                    2=>$surveyid)))->answer;

            $no4_5_2_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>127,
                                    2=>$surveyid)))->answer;

            /*$no4_5_2_2_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>128,
                                    2=>$surveyid)))->answer;*/

            $no4_5_2_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>129,
                                    2=>$surveyid)))->answer;

            $no4_5_2_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>130,
                                    2=>$surveyid)))->answer;

            $no4_5_2_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>131,
                                    2=>$surveyid)))->answer;

            $no4_5_2_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>132,
                                    2=>$surveyid)))->answer;

            /*$no4_5_2_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>133,
                                    2=>$surveyid)))->answer;*/

            $no4_5_2_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>134,
                                    2=>$surveyid)))->answer;

            $no4_5_2_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>135,
                                    2=>$surveyid)))->answer;

            $no4_5_2_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>136,
                                    2=>$surveyid)))->answer;

            $no4_5_2_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>137,
                                    2=>$surveyid)))->answer;

            /*$no4_5_2_4_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>138,
                                    2=>$surveyid)))->answer;*/

//no4_5_3
            $no4_5_3_1_1 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>139,
                        2=>$surveyid)))->answer;

            $no4_5_3_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>140,
                                    2=>$surveyid)))->answer;

            $no4_5_3_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>141,
                                    2=>$surveyid)))->answer;

            $no4_5_3_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>142,
                                    2=>$surveyid)))->answer;

            /*$no4_5_3_1_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>133,
                                    2=>$surveyid)))->answer;*/

            $no4_5_3_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>144,
                                    2=>$surveyid)))->answer;

            $no4_5_3_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>145,
                                    2=>$surveyid)))->answer;

            $no4_5_3_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>146,
                                    2=>$surveyid)))->answer;

            $no4_5_3_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>147,
                                    2=>$surveyid)))->answer;

            /*$no4_5_3_2_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>148,
                                    2=>$surveyid)))->answer;*/

            $no4_5_3_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>149,
                                    2=>$surveyid)))->answer;

            $no4_5_3_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>150,
                                    2=>$surveyid)))->answer;

            $no4_5_3_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>151,
                                    2=>$surveyid)))->answer;

            $no4_5_3_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>152,
                                    2=>$surveyid)))->answer;

            /*$no4_5_3_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>153,
                                    2=>$surveyid)))->answer;*/

            $no4_5_3_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>154,
                                    2=>$surveyid)))->answer;

            $no4_5_3_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>155,
                                    2=>$surveyid)))->answer;

            $no4_5_3_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>156,
                                    2=>$surveyid)))->answer;

            $no4_5_3_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>157,
                                    2=>$surveyid)))->answer;

            /*$no4_5_3_4_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>158,
                                    2=>$surveyid)))->answer;*/

//no4_5_4
            $no4_5_4_1_1 = Answer::findFirst(
                          array("questionid=?1 and discovery_surveyid=?2",
                              "bind"=>array(
                                  1=>159,
                                  2=>$surveyid)))->answer;

            $no4_5_4_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>160,
                                    2=>$surveyid)))->answer;

            $no4_5_4_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>161,
                                    2=>$surveyid)))->answer;

            $no4_5_4_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>162,
                                    2=>$surveyid)))->answer;

            /*$no4_5_4_1_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>163,
                                    2=>$surveyid)))->answer;*/

            $no4_5_4_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>164,
                                    2=>$surveyid)))->answer;

            $no4_5_4_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>165,
                                    2=>$surveyid)))->answer;

            $no4_5_4_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>166,
                                    2=>$surveyid)))->answer;

            $no4_5_4_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>167,
                                    2=>$surveyid)))->answer;

            /*$no4_5_4_2_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>168,
                                    2=>$surveyid)))->answer;*/

            $no4_5_4_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>169,
                                    2=>$surveyid)))->answer;

            $no4_5_4_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>170,
                                    2=>$surveyid)))->answer;

            $no4_5_4_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>171,
                                    2=>$surveyid)))->answer;

            $no4_5_4_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>172,
                                    2=>$surveyid)))->answer;

            /*$no4_5_4_3_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>173,
                                    2=>$surveyid)))->answer;*/

            $no4_5_4_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>174,
                                    2=>$surveyid)))->answer;

            $no4_5_4_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>175,
                                    2=>$surveyid)))->answer;

            $no4_5_4_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>176,
                                    2=>$surveyid)))->answer;

            $no4_5_4_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>177,
                                    2=>$surveyid)))->answer;

            /*$no4_5_4_4_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>178,
                                    2=>$surveyid)))->answer;*/

            $no4_6_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>179,
                                    2=>$surveyid)))->answer;

            $no4_6_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>180,
                                    2=>$surveyid)))->answer;

            $no4_6_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>181,
                                    2=>$surveyid)))->answer;

            $no4_6_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>182,
                                    2=>$surveyid)))->answer;

            $no4_6_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>183,
                                    2=>$surveyid)))->answer;

            $no4_6_6 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>184,
                                    2=>$surveyid)))->answer;

            $no4_6_7 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>185,
                                    2=>$surveyid)))->answer;

            $no4_6_8_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>186,
                                    2=>$surveyid)))->answer;

            $no4_6_8_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>187,
                                    2=>$surveyid)))->answer;

    	
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
		$document = new \PhpOffice\PhpWord\TemplateProcessor('/var/www/phalcon/app/modules/ClinicAdmin/Form/FormNo4.docx');
		//$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo6.docx');
		//var_dump(($document));die();
		date_default_timezone_set('Asia/Bangkok');

		$document->setValue('{year}', $year);
		$document->setValue('{no4_1}', $no4_1);
		$document->setValue('{no4_2}', $no4_2);

		$document->setValue('{no4_3_1}', $no4_3_1);
		$document->setValue('{no4_3_2}', $no4_3_2);
		$document->setValue('{no4_3_3}', $no4_3_3);
		$document->setValue('{no4_3_4}', $no4_3_4);
		$document->setValue('{no4_3_5}', $no4_3_5);
		$document->setValue('{no4_3_6}', $no4_3_6);
		$document->setValue('{no4_3_7}', $no4_3_7);
		$document->setValue('{no4_3_8}', $no4_3_8);

		$document->setValue('{no4_4_1_1}', $no4_4_1_1);
		$document->setValue('{no4_4_1_2}', $no4_4_1_2);
		$document->setValue('{no4_4_1_3}', $no4_4_1_3);
		$document->setValue('{no4_4_2_1}', $no4_4_2_1);
		$document->setValue('{no4_4_2_2}', $no4_4_2_2);
		$document->setValue('{no4_4_2_3}', $no4_4_2_3);
		$document->setValue('{no4_4_3_1}', $no4_4_3_1);
		$document->setValue('{no4_4_3_2}', $no4_4_3_2);
		$document->setValue('{no4_4_3_3}', $no4_4_3_3);
		$document->setValue('{no4_4_4_1}', $no4_4_4_1);
		$document->setValue('{no4_4_4_2}', $no4_4_4_2);
		$document->setValue('{no4_4_4_3}', $no4_4_4_3);
		$document->setValue('{no4_4_5_1}', $no4_4_5_1);
		$document->setValue('{no4_4_5_2}', $no4_4_5_2);
		$document->setValue('{no4_4_5_3}', $no4_4_5_3);

		//die($no4_5_1_1_5);
		$no4_5_1_1_5 = $no4_5_1_1_1 + $no4_5_1_1_2 + $no4_5_1_1_3 + $no4_5_1_1_4;
		$document->setValue('{no4_5_1_1_1}', $no4_5_1_1_1);
		$document->setValue('{no4_5_1_1_2}', $no4_5_1_1_2);
		$document->setValue('{no4_5_1_1_3}', $no4_5_1_1_3);
		$document->setValue('{no4_5_1_1_4}', $no4_5_1_1_4);
		$document->setValue('{no4_5_1_1_5}', $no4_5_1_1_5);

		$no4_5_1_2_5 = $no4_5_1_2_1 + $no4_5_1_2_2 + $no4_5_1_2_3 + $no4_5_1_2_4;
		$document->setValue('{no4_5_1_2_1}', $no4_5_1_2_1);
		$document->setValue('{no4_5_1_2_2}', $no4_5_1_2_2);
		$document->setValue('{no4_5_1_2_3}', $no4_5_1_2_3);
		$document->setValue('{no4_5_1_2_4}', $no4_5_1_2_4);
		$document->setValue('{no4_5_1_2_5}', $no4_5_1_2_5);

		$no4_5_1_3_5 = $no4_5_1_3_1 + $no4_5_1_3_2 + $no4_5_1_3_3 + $no4_5_1_3_4;
		$document->setValue('{no4_5_1_3_1}', $no4_5_1_3_1);
		$document->setValue('{no4_5_1_3_2}', $no4_5_1_3_2);
		$document->setValue('{no4_5_1_3_3}', $no4_5_1_3_3);
		$document->setValue('{no4_5_1_3_4}', $no4_5_1_3_4);
		$document->setValue('{no4_5_1_3_5}', $no4_5_1_3_5);

		$no4_5_1_4_5 = $no4_5_1_4_1 + $no4_5_1_4_2 + $no4_5_1_4_3 + $no4_5_1_4_4;
		$document->setValue('{no4_5_1_4_1}', $no4_5_1_4_1);
		$document->setValue('{no4_5_1_4_2}', $no4_5_1_4_2);
		$document->setValue('{no4_5_1_4_3}', $no4_5_1_4_3);
		$document->setValue('{no4_5_1_4_4}', $no4_5_1_4_4);
		$document->setValue('{no4_5_1_4_5}', $no4_5_1_4_5);

		$no4_5_2_1_5 = $no4_5_2_1_1 + $no4_5_2_1_2 + $no4_5_2_1_3 + $no4_5_2_1_4;
		$document->setValue('{no4_5_2_1_1}', $no4_5_2_1_1);
		$document->setValue('{no4_5_2_1_2}', $no4_5_2_1_2);
		$document->setValue('{no4_5_2_1_3}', $no4_5_2_1_3);
		$document->setValue('{no4_5_2_1_4}', $no4_5_2_1_4);
		$document->setValue('{no4_5_2_1_5}', $no4_5_1_1_5);

		$no4_5_2_2_5 = $no4_5_2_2_1 + $no4_5_2_2_2 + $no4_5_2_2_3 + $no4_5_2_2_4;
		$document->setValue('{no4_5_2_2_1}', $no4_5_2_2_1);
		$document->setValue('{no4_5_2_2_2}', $no4_5_2_2_2);
		$document->setValue('{no4_5_2_2_3}', $no4_5_2_2_3);
		$document->setValue('{no4_5_2_2_4}', $no4_5_2_2_4);
		$document->setValue('{no4_5_2_2_5}', $no4_5_1_2_5);

		$no4_5_2_3_5 = $no4_5_2_3_1 + $no4_5_2_3_2 + $no4_5_2_3_3 + $no4_5_2_3_4;
		$document->setValue('{no4_5_2_3_1}', $no4_5_2_3_1);
		$document->setValue('{no4_5_2_3_2}', $no4_5_2_3_2);
		$document->setValue('{no4_5_2_3_3}', $no4_5_2_3_3);
		$document->setValue('{no4_5_2_3_4}', $no4_5_2_3_4);
		$document->setValue('{no4_5_2_3_5}', $no4_5_1_3_5);

		$no4_5_2_4_5 = $no4_5_2_4_1 + $no4_5_2_4_2 + $no4_5_2_4_3 + $no4_5_2_4_4;
		$document->setValue('{no4_5_2_4_1}', $no4_5_2_4_1);
		$document->setValue('{no4_5_2_4_2}', $no4_5_2_4_2);
		$document->setValue('{no4_5_2_4_3}', $no4_5_2_4_3);
		$document->setValue('{no4_5_2_4_4}', $no4_5_2_4_4);
		$document->setValue('{no4_5_2_4_5}', $no4_5_1_4_5);

		$no4_5_3_1_5 = $no4_5_3_1_1 + $no4_5_3_1_2 + $no4_5_3_1_3 + $no4_5_3_1_4;
		$document->setValue('{no4_5_3_1_1}', $no4_5_3_1_1);
		$document->setValue('{no4_5_3_1_2}', $no4_5_3_1_2);
		$document->setValue('{no4_5_3_1_3}', $no4_5_3_1_3);
		$document->setValue('{no4_5_3_1_4}', $no4_5_3_1_4);
		$document->setValue('{no4_5_3_1_5}', $no4_5_3_1_5);

		$no4_5_3_2_5 = $no4_5_3_2_1 + $no4_5_3_2_2 + $no4_5_3_2_3 + $no4_5_3_2_4;
		$document->setValue('{no4_5_3_2_1}', $no4_5_3_2_1);
		$document->setValue('{no4_5_3_2_2}', $no4_5_3_2_2);
		$document->setValue('{no4_5_3_2_3}', $no4_5_3_2_3);
		$document->setValue('{no4_5_3_2_4}', $no4_5_3_2_4);
		$document->setValue('{no4_5_3_2_5}', $no4_5_3_2_5);

		$no4_5_3_3_5 = $no4_5_3_3_1 + $no4_5_3_3_2 + $no4_5_3_3_3 + $no4_5_3_3_4;
		$document->setValue('{no4_5_3_3_1}', $no4_5_3_3_1);
		$document->setValue('{no4_5_3_3_2}', $no4_5_3_3_2);
		$document->setValue('{no4_5_3_3_3}', $no4_5_3_3_3);
		$document->setValue('{no4_5_3_3_4}', $no4_5_3_3_4);
		$document->setValue('{no4_5_3_3_5}', $no4_5_3_3_5);

		$no4_5_3_4_5 = $no4_5_3_4_1 + $no4_5_3_4_2 + $no4_5_3_4_3 + $no4_5_3_4_4;
		$document->setValue('{no4_5_3_4_1}', $no4_5_3_4_1);
		$document->setValue('{no4_5_3_4_2}', $no4_5_3_4_2);
		$document->setValue('{no4_5_3_4_3}', $no4_5_3_4_3);
		$document->setValue('{no4_5_3_4_4}', $no4_5_3_4_4);
		$document->setValue('{no4_5_3_4_5}', $no4_5_3_4_5);

		$no4_5_4_1_5 = $no4_5_4_1_1 + $no4_5_4_1_2 + $no4_5_4_1_3 + $no4_5_4_1_4;
		$document->setValue('{no4_5_4_1_1}', $no4_5_4_1_1);
		$document->setValue('{no4_5_4_1_2}', $no4_5_4_1_2);
		$document->setValue('{no4_5_4_1_3}', $no4_5_4_1_3);
		$document->setValue('{no4_5_4_1_4}', $no4_5_4_1_4);
		$document->setValue('{no4_5_4_1_5}', $no4_5_4_1_5);

		$no4_5_4_2_5 = $no4_5_4_2_1 + $no4_5_4_2_2 + $no4_5_4_2_3 + $no4_5_4_2_4;
		$document->setValue('{no4_5_4_2_1}', $no4_5_4_2_1);
		$document->setValue('{no4_5_4_2_2}', $no4_5_4_2_2);
		$document->setValue('{no4_5_4_2_3}', $no4_5_4_2_3);
		$document->setValue('{no4_5_4_2_4}', $no4_5_4_2_4);
		$document->setValue('{no4_5_4_2_5}', $no4_5_4_2_5);

		$no4_5_4_3_5 = $no4_5_4_3_1 + $no4_5_4_3_2 + $no4_5_4_3_3 + $no4_5_4_3_4;
		$document->setValue('{no4_5_4_3_1}', $no4_5_4_3_1);
		$document->setValue('{no4_5_4_3_2}', $no4_5_4_3_2);
		$document->setValue('{no4_5_4_3_3}', $no4_5_4_3_3);
		$document->setValue('{no4_5_4_3_4}', $no4_5_4_3_4);
		$document->setValue('{no4_5_4_3_5}', $no4_5_4_3_5);

		$no4_5_4_4_5 = $no4_5_4_4_1 + $no4_5_4_4_2 + $no4_5_4_4_3 + $no4_5_4_4_4;
		$document->setValue('{no4_5_4_4_1}', $no4_5_4_4_1);
		$document->setValue('{no4_5_4_4_2}', $no4_5_4_4_2);
		$document->setValue('{no4_5_4_4_3}', $no4_5_4_4_3);
		$document->setValue('{no4_5_4_4_4}', $no4_5_4_4_4);
		$document->setValue('{no4_5_4_4_5}', $no4_5_4_4_5);

		$document->setValue('{no4_6_1}', $no4_6_1);
		$document->setValue('{no4_6_2}', $no4_6_2);
		$document->setValue('{no4_6_3}', $no4_6_3);
		$document->setValue('{no4_6_4}', $no4_6_4);
		$document->setValue('{no4_6_5}', $no4_6_5);
		$document->setValue('{no4_6_6}', $no4_6_6);
		$document->setValue('{no4_6_7}', $no4_6_7);
		$document->setValue('{no4_6_8_1}', $no4_6_8_1);
		$document->setValue('{no4_6_8_2}', $no4_6_8_2);
		//die();

		$tmp_file = 'FormNoTMP.docx';
		$result = $document->saveAs($tmp_file);   
		//die($result);
	 	$this->converttowordtemplate('FormNo4_',$tmp_file);

		
    }

    public function PrintFormNo6Action()
    {
    	$surveyid = $this->session->get('surveyid');
    	$discovery_surveyid = $this->session->get('discovery_surveyid');
    	//echo $surveyid."--".$discovery_surveyid;

    	$year = Survey::findFirst("id = {$surveyid}")->no;

    	$no6_1 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>225,
                        2=>$surveyid)))->answer;
    	$no6_2 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>226,
                        2=>$surveyid)))->answer;
    	$no6_3 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>227,
                        2=>$surveyid)))->answer;
    	$no6_4 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>228,
                        2=>$surveyid)))->answer;
    	$no6_5 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>229,
                        2=>$surveyid)))->answer;
    	$no6_6 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>230,
                        2=>$surveyid)))->answer;
    	$no6_7 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>231,
                        2=>$surveyid)))->answer;
    	$no6_8 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>232,
                        2=>$surveyid)))->answer;
    	$no6_9 = Answer::findFirst(
                array("questionid=?1 and discovery_surveyid=?2",
                    "bind"=>array(
                        1=>233,
                        2=>$surveyid)))->answer;
        //die($no6_9);
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
		$document = new \PhpOffice\PhpWord\TemplateProcessor('/var/www/phalcon/app/modules/ClinicAdmin/Form/FormNo6.docx');
		//$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo6.docx');
		//var_dump(($document));die();
		date_default_timezone_set('Asia/Bangkok');

		$document->setValue('{year}', $year);
		$document->setValue('{no6_1}', $no6_1);
		$document->setValue('{no6_2}', $no6_2);
		$document->setValue('{no6_3}', $no6_3);
		$document->setValue('{no6_4}', $no6_4);
		$document->setValue('{no6_5}', $no6_5);
		$document->setValue('{no6_6}', $no6_6);
		$document->setValue('{no6_7}', $no6_7);
		$document->setValue('{no6_8}', $no6_8);
		$document->setValue('{no6_9}', $no6_9);

		$tmp_file = 'FormNoTMP.docx';
		$result = $document->saveAs($tmp_file);   
		//die($result);
	 	$this->converttowordtemplate('FormNo6_',$tmp_file);

		
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