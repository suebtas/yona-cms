<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Clinic\Model\BoundaryOffice;
use Clinic\Model\DiscoverSurvey;
use Clinic\Model\Answer;
use Phalcon\Mvc\Model\Resultset;
use Clinic\Form\Question\No1Form;

class FormController extends Controller
{

    public function initialize()
    {

        $this->session->set('surveyid', 1);
        $this->session->set('discovery_surveyid', 1);
        $this->setClinicEnvironment();
        $this->view->languages_disabled = true;
        $this->surveyid = $this->session->get('surveyid');
        $this->discovery_surveyid = $this->session->get('discovery_surveyid');
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
        $user = AdminUser::findFirst($auth->id);
        $this->view->user = $user;
        $this->view->office =  Office::findFirst($user->officeid);
    }

    public function updateAnswer($option,$questionid, $answer, $officeid, $discovery_surveyid){
      if($answer!=""){
          if($option=='add'){
              $modelT = Answer::findFirst(
                  array("questionid=?1 and discovery_surveyid=?2",
                      "bind"=>array(
                          1=>$questionid,
                          2=>$discovery_surveyid)));
              if(!$modelT)
                  $modelT = new Answer();

              $modelT->officeid = $officeid;
              $modelT->discovery_surveyid = $discovery_surveyid;
              $modelT->questionid = $questionid;
              $modelT->answer = $answer;
              if($modelT->save()==false)
                  echo 'error';
              else
                  echo 'ok';
          }elseif($answer=='delete' && $option=='delete'){
              $modelT = Answer::findFirst(
                  array("questionid=?1 and discovery_surveyid=?2",
                      "bind"=>array(
                          1=>$questionid,
                          2=>$discovery_surveyid)));
              $modelT->delete();
              echo 'delete';

            }
      }
    }
    public function no1Action()
    {
        // no1 JS Assets
        $this->assets->collection('modules-clinic-no1-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no1.js')
            ->setTargetUri('assets/modules-clinic-no1.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no1.js');
<<<<<<< HEAD

        $form = new No1Form();
        $auth = $this->session->get('auth');
        $user = AdminUser::findFirst($auth->id);

        $no1_3_3 = $no1_3_2 = $no1_3_3 = $no1_3_4 = [];

        $no1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>2,
                                2=>$this->surveyid)))->answer;
       $no1_2_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>7,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_1_1 = $no1_2_1_1;

        $no1_2_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>8,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_1_2 = $no1_2_1_2;

        $no1_2_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>9,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_2_1 = $no1_2_2_1;

        $no1_2_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>10,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_2_2 = $no1_2_2_2;

        $no1_2_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>11,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_3_3 = $no1_2_3_3;

        $no1_2_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>12,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_3_2 = $no1_2_3_2;

        $no1_2_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>13,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_4_1 = $no1_2_4_1;

        $no1_2_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>14,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_4_2 = $no1_2_4_2;

        $no1_2_5_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>15,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_5_1 = $no1_2_5_1;


        $no1_2_5_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>16,
                                2=>$this->surveyid)))->answer;
        $this->view->no1_2_5_2 = $no1_2_5_2;

        $no1_3_3 = BoundaryOffice::toArrayCloseOfficeID(
                    array("owner_officeid = ?1 and boundaryid = 1",
                        "bind" => array(
                            1=>$user->officeid
=======
        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $no1_3_1 = $no1_3_2 = $no1_3_3 = $no1_3_4 = [];

            $no1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>2,
                                    2=>$this->surveyid)))->answer;
           $no1_2_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>7,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_1_1 = $no1_2_1_1;

            $no1_2_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>8,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_1_2 = $no1_2_1_2;

            $no1_2_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>9,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_2_1 = $no1_2_2_1;

            $no1_2_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>10,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_2_2 = $no1_2_2_2;

            $no1_2_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>11,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_3_1 = $no1_2_3_1;

            $no1_2_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>12,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_3_2 = $no1_2_3_2;

            $no1_2_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>13,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_4_1 = $no1_2_4_1;

            $no1_2_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>14,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_4_2 = $no1_2_4_2;

            $no1_2_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>15,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_5_1 = $no1_2_5_1;

            
            $no1_2_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>16,
                                    2=>$this->surveyid)))->answer;
            $this->view->no1_2_5_2 = $no1_2_5_2;

            $no1_3_1 = BoundaryOffice::toArrayCloseOfficeID(
                        array("owner_officeid = ?1 and boundaryid = 1",
                            "bind" => array(
                                1=>$user->officeid
                                )
>>>>>>> origin/clinic-center
                            )
                        );
            $no1_3_2 = BoundaryOffice::toArrayCloseOfficeID(
                        array("owner_officeid = ?1 and boundaryid = 2",
                            "bind" => array(
                                1=>$user->officeid
                                )
                            )
                        );
            $no1_3_3 = BoundaryOffice::toArrayCloseOfficeID(
                        array("owner_officeid = ?1 and boundaryid = 3",
                            "bind" => array(
                                1=>$user->officeid
                                )
                            )
                        );
            $no1_3_4 = BoundaryOffice::toArrayCloseOfficeID(
                        array("owner_officeid = ?1 and boundaryid = 4",
                            "bind" => array(
                                1=>$user->officeid
                                )
                            )
<<<<<<< HEAD
                        )
                    );
        $obj = (object) array(
                'no1_1_2'   => $no1_2,
                'no1_2_2_1' => $no1_2_2_1,
                'no1_1_3_3' => $no1_3_3,
                'no1_1_3_2' => $no1_3_2,
                'no1_1_3_3' => $no1_3_3,
                'no1_1_3_4' => $no1_3_4,
            );

        $form->setEntity($obj);
        $this->view->form = $form;

        if ($this->request->isPost()) {
=======
                        );
            $obj = (object) array(
                    'no1_1_2'   => $no1_2,
                    'no1_2_2_1' => $no1_2_2_1,
                    'no1_1_3_1' => $no1_3_1,
                    'no1_1_3_2' => $no1_3_2,
                    'no1_1_3_3' => $no1_3_3,
                    'no1_1_3_4' => $no1_3_4,
                );

            $form->setEntity($obj);
            $this->view->form = $form;

        }elseif ($this->request->isPost()) {
>>>>>>> origin/clinic-center
            $this->view->disable();
            $post = $this->request->getPost();


            $option = $this->request->getPost("option");
            $answer = $this->request->getPost("no1_1_2");
            $this->updateAnswer($option, 2, $answer, $user->officeid,  $this->discovery_surveyid);


            $option = $this->request->getPost("option");
            $officeID = $this->request->getPost("no1_1_3_3");
            if($officeID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryOffice();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_officeid = $officeID;
                    $modelT->boundaryid = 1;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryOffice::find(
                        array("close_officeid = ?1 and owner_officeid = ?2 and boundaryid = 1",
                            "bind"=>array(
                                1=>$officeID,
                                2=>$user->officeid)
                            )
                        );
                    $modelT->delete();
                }
            }

            $officeID = $this->request->getPost("no1_1_3_2");
            if($officeID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryOffice();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_officeid = $officeID;
                    $modelT->boundaryid = 2;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryOffice::find(
                        array("close_officeid = ?1 and owner_officeid = ?2 and boundaryid = 2",
                            "bind"=>array(
                                1=>$officeID,
                                2=>$user->officeid)
                            )
                        );
                    $modelT->delete();
                }
            }

            $officeID = $this->request->getPost("no1_1_3_3");
            if($officeID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryOffice();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_officeid = $officeID;
                    $modelT->boundaryid = 3;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryOffice::find(
                        array("close_officeid = ?1 and owner_officeid = ?2 and boundaryid = 3",
                            "bind"=>array(
                                1=>$officeID,
                                2=>$user->officeid)
                            )
                        );
                    $modelT->delete();
                }
            }

            $officeID = $this->request->getPost("no1_1_3_4");
            if($officeID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryOffice();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_officeid = $officeID;
                    $modelT->boundaryid = 4;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryOffice::find(
                        array("close_officeid = ?1 and owner_officeid = ?2 and boundaryid = 4",
                            "bind"=>array(
                                1=>$officeID,
                                2=>$user->officeid)
                            )
                        );
                    $modelT->delete();
                }
            }

            $answer = $this->request->getPost("no1_2_1_1");
            $this->updateAnswer($option, 7, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_1_2");
            $this->updateAnswer($option, 8, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_2_1");
            $this->updateAnswer($option, 9, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_2_2");
            $this->updateAnswer($option, 10, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_3_3");
            $this->updateAnswer($option, 11, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_3_2");
            $this->updateAnswer($option, 12, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_4_1");
            $this->updateAnswer($option, 13, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_4_2");
            $this->updateAnswer($option, 14, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_5_1");
            $this->updateAnswer($option, 15, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_5_2");
            $this->updateAnswer($option, 16, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_6_1");
            $this->updateAnswer($option, 17, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_6_2");
            $this->updateAnswer($option, 18, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_6_3");
            $this->updateAnswer($option, 19, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_6_4");
            $this->updateAnswer($option, 20, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_7_1");
            $this->updateAnswer($option, 21, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_7_2");
            $this->updateAnswer($option, 22, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_7_5");
            $this->updateAnswer($option, 23, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_8");
            $this->updateAnswer($option, 24, $answer, $user->officeid,  $this->discovery_surveyid);

        }
    }
    public function no2Action()
    {

        // no2 JS Assets
        $this->assets->collection('modules-clinic-no2-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no2.js')
            ->setTargetUri('assets/modules-clinic-no2.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no2.js');


            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            if ($this->request->isPost()) {
                $option = $this->request->getPost("option");
                $this->view->disable();
                $post = $this->request->getPost();

                $answer = $this->request->getPost("no2_1_1");
                $this->updateAnswer($option, 25, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_2_1");
                $this->updateAnswer($option, 26, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_2_2");
                $this->updateAnswer($option, 27, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_3_1");
                $this->updateAnswer($option, 28, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_3_2");
                $this->updateAnswer($option, 29, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_4_1");
                $this->updateAnswer($option, 30, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_4_2");
                $this->updateAnswer($option, 31, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_5_1");
                $this->updateAnswer($option, 32, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_5_2");
                $this->updateAnswer($option, 33, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_5_3");
                $this->updateAnswer($option, 34, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_1_6");
                $this->updateAnswer($option, 35, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_2_1");
                $this->updateAnswer($option, 36, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_2_2");
                $this->updateAnswer($option, 37, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_3_3");
                $this->updateAnswer($option, 38, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_3_2");
                $this->updateAnswer($option, 39, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_3_3");
                $this->updateAnswer($option, 40, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_3_4");
                $this->updateAnswer($option, 41, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_3_5");
                $this->updateAnswer($option, 42, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_3_6");
                $this->updateAnswer($option, 43, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_3_7");
                $this->updateAnswer($option, 44, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_4_1");
                $this->updateAnswer($option, 45, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_4_2");
                $this->updateAnswer($option, 46, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_4_3");
                $this->updateAnswer($option, 47, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_4_4");
                $this->updateAnswer($option, 48, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_5_1");
                $this->updateAnswer($option, 49, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_5_2");
                $this->updateAnswer($option, 50, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_5_3");
                $this->updateAnswer($option, 51, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_5_4");
                $this->updateAnswer($option, 52, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_5_5");
                $this->updateAnswer($option, 53, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_5_6");
                $this->updateAnswer($option, 54, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_5_7");
                $this->updateAnswer($option, 55, $answer, $user->officeid,  $this->discovery_surveyid);
                $answer = $this->request->getPost("no2_5_8");
                $this->updateAnswer($option, 56, $answer, $user->officeid,  $this->discovery_surveyid);


            }
            else {
              $no2_1_1 = Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>25,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_1 = $no2_1_1;
              $no2_1_2_1 = Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>26,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_2_1 = $no2_1_2_1;
              $no2_1_2_2 = Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>27,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_2_2 = $no2_1_2_2;
              $no2_1_3_1= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>28,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_3_1 = $no2_1_3_1;
              $no2_1_3_2= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>29,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_3_2 = $no2_1_3_2;
              $no2_1_4_1= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>30,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_4_1 = $no2_1_4_1;
              $no2_1_4_2= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>31,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_4_2 = $no2_1_4_2;
              $no2_1_5_1= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>32,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_5_1 = $no2_1_5_1;
              $no2_1_5_2= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>33,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_5_2 = $no2_1_5_2;
              $no2_1_5_3= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>34,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_5_3 = $no2_1_5_3;
              $no2_1_6= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>35,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_1_6 = $no2_1_6;
              $no2_2_1= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>36,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_2_1 = $no2_2_1;
              $no2_2_2= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>37,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_2_2 = $no2_2_2;
              $no2_3_1= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>38,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_3_1 = $no2_3_1;
              $no2_3_2= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>39,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_3_2 = $no2_3_2;
              $no2_3_3= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>40,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_3_3 = $no2_3_3;
              $no2_3_4= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>41,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_3_4 = $no2_3_4;
              $no2_3_5= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>42,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_3_5 = $no2_3_5;
              $no2_3_6= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>43,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_3_6 = $no2_3_6;
              $no2_3_7= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>44,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_3_7 = $no2_3_7;
              $no2_4_1= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>45,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_4_1 = $no2_4_1;
              $no2_4_2= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>46,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_4_2 = $no2_4_2;
              $no2_4_3= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>47,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_4_3 = $no2_4_3;
              $no2_4_4= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>48,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_4_4 = $no2_4_4;
              $no2_5_1= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>49,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_5_1 = $no2_5_1;
              $no2_5_2= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>50,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_5_2 = $no2_5_2;
              $no2_5_3= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>51,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_5_3 = $no2_5_3;
              $no2_5_4= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>52,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_5_4 = $no2_5_4;
              $no2_5_5= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>53,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_5_5 = $no2_5_5;
              $no2_5_6= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>54,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_5_6 = $no2_5_6;
              $no2_5_7= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>55,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_5_7 = $no2_5_7;
              $no2_5_8= Answer::findFirst(
                              array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>56,
                                      2=>$this->surveyid)))->answer;
              $this->view->no2_5_8 = $no2_5_8;
            }

    }
    public function no3Action()
    {
      // no3 JS Assets
      $this->assets->collection('modules-clinic-no3-js')
          ->setLocal(true)
          ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
          ->setTargetPath(ROOT . '/assets/modules-clinic-no3.js')
          ->setTargetUri('assets/modules-clinic-no3.js')
          ->join(true)
          ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no3.js');
          $auth = $this->session->get('auth');
          $user = AdminUser::findFirst($auth->id);

          if ($this->request->isPost()) {
              $option = $this->request->getPost("option");
              $this->view->disable();
              $post = $this->request->getPost();

              $answer = $this->request->getPost("no3_1");
              $this->updateAnswer($option, 57, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_2_1");
              $this->updateAnswer($option, 58, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_2_2");
              $this->updateAnswer($option, 59, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_2_3");
              $this->updateAnswer($option, 60, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_2_4");
              $this->updateAnswer($option, 61, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_3_3");
              $this->updateAnswer($option, 62, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_3_2");
              $this->updateAnswer($option, 63, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_3_3");
              $this->updateAnswer($option, 64, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_4_1");
              $this->updateAnswer($option, 65, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_4_2");
              $this->updateAnswer($option, 66, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_4_3");
              $this->updateAnswer($option, 67, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_4_4");
              $this->updateAnswer($option, 68, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_5_1");
              $this->updateAnswer($option, 69, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_5_2");
              $this->updateAnswer($option, 70, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_6_1");
              $this->updateAnswer($option, 71, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_6_2");
              $this->updateAnswer($option, 72, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no3_6_3");
              $this->updateAnswer($option, 73, $answer, $user->officeid,  $this->discovery_surveyid);
          }
          else {
            $no3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>57,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_1 = $no3_1;
            $no3_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>58,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_2_1 = $no3_2_1;
            $no3_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>59,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_2_2 = $no3_2_2;
            $no3_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>60,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_2_3 = $no3_2_3;
            $no3_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>61,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_2_4 = $no3_2_4;
            $no3_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>62,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_3_1 = $no3_3_1;
            $no3_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>63,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_3_2 = $no3_3_2;
            $no3_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>64,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_3_3 = $no3_3_3;
            $no3_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>65,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_4_1 = $no3_4_1;
            $no3_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>66,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_4_2 = $no3_4_2;
            $no3_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>67,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_4_3 = $no3_4_3;
            $no3_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>68,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_4_4 = $no3_4_4;
            $no3_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>69,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_5_1 = $no3_5_1;
            $no3_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>70,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_5_2 = $no3_5_2;
            $no3_6_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>71,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_6_1 = $no3_6_1;
            $no3_6_2= Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>72,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_6_2 = $no3_6_2;
            $no3_6_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>73,
                                    2=>$this->surveyid)))->answer;
            $this->view->no3_6_3 = $no3_6_3;
          }
    }
    public function no4Action()
    {
        $this->assets->collection('modules-clinic-no4-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no4.js')
            ->setTargetUri('assets/modules-clinic-no4.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no4.js');

    }
    public function no5Action()
    {
        $this->assets->collection('modules-clinic-no5-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no5.js')
            ->setTargetUri('assets/modules-clinic-no5.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no5.js');

    }
    public function no6Action()
    {
        $this->assets->collection('modules-clinic-no6-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no6.js')
            ->setTargetUri('assets/modules-clinic-no6.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no6.js');
    }
    public function no7Action()
    {
      // no7 JS Assets
      $this->assets->collection('modules-clinic-no7-js')
          ->setLocal(true)
          ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
          ->setTargetPath(ROOT . '/assets/modules-clinic-no7.js')
          ->setTargetUri('assets/modules-clinic-no7.js')
          ->join(true)
          ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no7.js');
          $auth = $this->session->get('auth');
          $user = AdminUser::findFirst($auth->id);

          if ($this->request->isPost()) {
              $option = $this->request->getPost("option");
              $this->view->disable();
              $post = $this->request->getPost();

              $answer = $this->request->getPost("no7_1");
              $this->updateAnswer($option, 234, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_2_1");
              $this->updateAnswer($option, 235, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_2_2");
              $this->updateAnswer($option, 236, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_2_3");
              $this->updateAnswer($option, 237, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_1_1");
              $this->updateAnswer($option, 238, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_1_2");
              $this->updateAnswer($option, 239, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_1_3");
              $this->updateAnswer($option, 240, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_1_4");
              $this->updateAnswer($option, 241, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_2_1");
              $this->updateAnswer($option, 242, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_2_2");
              $this->updateAnswer($option, 243, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_2_3");
              $this->updateAnswer($option, 244, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_2_4");
              $this->updateAnswer($option, 245, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_3_1");
              $this->updateAnswer($option, 246, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_3_2");
              $this->updateAnswer($option, 247, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_3_3");
              $this->updateAnswer($option, 248, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_3_4");
              $this->updateAnswer($option, 249, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_4_1");
              $this->updateAnswer($option, 250, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_4_2");
              $this->updateAnswer($option, 251, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_4_3");
              $this->updateAnswer($option, 252, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_4_4");
              $this->updateAnswer($option, 253, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_5_1");
              $this->updateAnswer($option, 254, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_5_2");
              $this->updateAnswer($option, 255, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_5_3");
              $this->updateAnswer($option, 256, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_3_5_4");
              $this->updateAnswer($option, 257, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_1_1");
              $this->updateAnswer($option, 258, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_1_2");
              $this->updateAnswer($option, 259, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_1_3");
              $this->updateAnswer($option, 260, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_1_4");
              $this->updateAnswer($option, 261, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_2_1");
              $this->updateAnswer($option, 262, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_2_2");
              $this->updateAnswer($option, 263, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_2_3");
              $this->updateAnswer($option, 264, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_2_4");
              $this->updateAnswer($option, 265, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_3_1");
              $this->updateAnswer($option, 266, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_3_2");
              $this->updateAnswer($option, 267, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_3_3");
              $this->updateAnswer($option, 268, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_3_4");
              $this->updateAnswer($option, 269, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_4_1");
              $this->updateAnswer($option, 270, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_4_2");
              $this->updateAnswer($option, 271, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_4_3");
              $this->updateAnswer($option, 272, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_4_4");
              $this->updateAnswer($option, 273, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_5_1");
              $this->updateAnswer($option, 274, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_5_2");
              $this->updateAnswer($option, 275, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_5_3");
              $this->updateAnswer($option, 276, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_4_5_4");
              $this->updateAnswer($option, 277, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_1_1");
              $this->updateAnswer($option, 278, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_1_2");
              $this->updateAnswer($option, 279, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_1_3");
              $this->updateAnswer($option, 280, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_1_4");
              $this->updateAnswer($option, 281, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_2_1");
              $this->updateAnswer($option, 282, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_2_2");
              $this->updateAnswer($option, 283, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_2_3");
              $this->updateAnswer($option, 284, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_2_4");
              $this->updateAnswer($option, 285, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_3_1");
              $this->updateAnswer($option, 286, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_3_2");
              $this->updateAnswer($option, 287, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_3_3");
              $this->updateAnswer($option, 288, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_3_4");
              $this->updateAnswer($option, 289, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_4_1");
              $this->updateAnswer($option, 290, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_4_2");
              $this->updateAnswer($option, 291, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_4_3");
              $this->updateAnswer($option, 292, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_4_4");
              $this->updateAnswer($option, 293, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_5_1");
              $this->updateAnswer($option, 294, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_5_2");
              $this->updateAnswer($option, 295, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_5_3");
              $this->updateAnswer($option, 296, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_5_5_4");
              $this->updateAnswer($option, 297, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_1_1");
              $this->updateAnswer($option, 298, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_1_2");
              $this->updateAnswer($option, 299, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_1_3");
              $this->updateAnswer($option, 300, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_1_4");
              $this->updateAnswer($option, 301, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_2_1");
              $this->updateAnswer($option, 302, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_2_2");
              $this->updateAnswer($option, 303, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_2_3");
              $this->updateAnswer($option, 304, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_2_4");
              $this->updateAnswer($option, 305, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_3_1");
              $this->updateAnswer($option, 306, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_3_2");
              $this->updateAnswer($option, 307, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_3_3");
              $this->updateAnswer($option, 308, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_3_4");
              $this->updateAnswer($option, 309, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_4_1");
              $this->updateAnswer($option, 310, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_4_2");
              $this->updateAnswer($option, 311, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_4_3");
              $this->updateAnswer($option, 312, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_4_4");
              $this->updateAnswer($option, 313, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_5_1");
              $this->updateAnswer($option, 314, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_5_2");
              $this->updateAnswer($option, 315, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_5_3");
              $this->updateAnswer($option, 316, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_6_5_4");
              $this->updateAnswer($option, 317, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_7");
              $this->updateAnswer($option, 318, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_8");
              $this->updateAnswer($option, 319, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_9");
              $this->updateAnswer($option, 320, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_10");
              $this->updateAnswer($option, 321, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no7_11");
              $this->updateAnswer($option, 322, $answer, $user->officeid,  $this->discovery_surveyid);



          }
          else {
            $no7_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>234,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_1 = $no7_1;
            $no7_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>235,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_2_1 = $no7_2_1;
            $no7_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>236,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_2_2 = $no7_2_2;
            $no7_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>237,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_2_3 = $no7_2_3;
            $no7_3_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>238,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_1_1 = $no7_3_1_1;
            $no7_3_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>239,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_1_2 = $no7_3_1_2;
            $no7_3_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>240,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_1_3 = $no7_3_1_3;
            $no7_3_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>241,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_1_4 = $no7_3_1_4;
            $no7_3_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>242,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_2_1 = $no7_3_2_1;
            $no7_3_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>243,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_2_2 = $no7_3_2_2;
            $no7_3_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>244,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_2_3 = $no7_3_2_3;
            $no7_3_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>245,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_2_4 = $no7_3_2_4;
            $no7_3_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>246,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_3_1 = $no7_3_3_1;
            $no7_3_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>247,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_3_2 = $no7_3_3_2;
            $no7_3_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>248,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_3_3 = $no7_3_3_3;
            $no7_3_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>249,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_3_4 = $no7_3_3_4;
            $no7_3_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>250,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_4_1 = $no7_3_4_1;
            $no7_3_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>251,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_4_2 = $no7_3_4_2;
            $no7_3_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>252,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_4_3 = $no7_3_4_3;
            $no7_3_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>253,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_4_4 = $no7_3_4_4;
            $no7_3_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>254,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_5_1 = $no7_3_5_1;
            $no7_3_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>255,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_5_2 = $no7_3_5_2;
            $no7_3_5_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>256,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_5_3 = $no7_3_5_3;
            $no7_3_5_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>257,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_3_5_4 = $no7_3_5_4;
            $no7_4_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>258,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_1_1 = $no7_4_1_1;
            $no7_4_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>259,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_1_2 = $no7_4_1_2;
            $no7_4_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>260,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_1_3 = $no7_4_1_3;
            $no7_4_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>261,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_1_4 = $no7_4_1_4;
            $no7_4_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>262,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_2_1 = $no7_4_2_1;
            $no7_4_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>263,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_2_2 = $no7_4_2_2;
            $no7_4_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>264,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_2_3 = $no7_4_2_3;
            $no7_4_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>265,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_2_4 = $no7_4_2_4;
            $no7_4_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>266,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_3_1 = $no7_4_3_1;
            $no7_4_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>267,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_3_2 = $no7_4_3_2;
            $no7_4_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>268,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_3_3 = $no7_4_3_3;
            $no7_4_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>269,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_3_4 = $no7_4_3_4;
            $no7_4_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>270,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_4_1 = $no7_4_4_1;
            $no7_4_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>271,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_4_2 = $no7_4_4_2;
            $no7_4_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>272,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_4_3 = $no7_4_4_3;
            $no7_4_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>273,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_4_4 = $no7_4_4_4;
            $no7_4_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>274,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_5_1 = $no7_4_5_1;
            $no7_4_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>275,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_5_2 = $no7_4_5_2;
            $no7_4_5_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>276,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_5_3 = $no7_4_5_3;
            $no7_4_5_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>277,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_4_5_4 = $no7_4_5_4;
            $no7_5_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>278,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_1_1 = $no7_5_1_1;
            $no7_5_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>279,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_1_2 = $no7_5_1_2;
            $no7_5_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>280,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_1_3 = $no7_5_1_3;
            $no7_5_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>281,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_1_4 = $no7_5_1_4;
            $no7_5_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>282,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_2_1 = $no7_5_2_1;
            $no7_5_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>283,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_2_2 = $no7_5_2_2;
            $no7_5_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>284,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_2_3 = $no7_5_2_3;
            $no7_5_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>285,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_2_4 = $no7_5_2_4;
            $no7_5_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>286,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_3_1 = $no7_5_3_1;
            $no7_5_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>287,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_3_2 = $no7_5_3_2;
            $no7_5_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>288,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_3_3 = $no7_5_3_3;
            $no7_5_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>289,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_3_4 = $no7_5_3_4;
            $no7_5_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>290,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_4_1 = $no7_5_4_1;
            $no7_5_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>291,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_4_2 = $no7_5_4_2;
            $no7_5_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>292,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_4_3 = $no7_5_4_3;
            $no7_5_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>293,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_4_4 = $no7_5_4_4;
            $no7_5_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>294,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_5_1 = $no7_5_5_1;
            $no7_5_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>295,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_5_2 = $no7_5_5_2;
            $no7_5_5_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>296,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_5_3 = $no7_5_5_3;
            $no7_5_5_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>297,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_5_5_4 = $no7_5_5_4;
            $no7_6_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>298,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_1_1 = $no7_6_1_1;
            $no7_6_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>299,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_1_2 = $no7_6_1_2;
            $no7_6_1_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>300,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_1_3 = $no7_6_1_3;
            $no7_6_1_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>301,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_1_4 = $no7_6_1_4;
            $no7_6_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>302,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_2_1 = $no7_6_2_1;
            $no7_6_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>303,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_2_2 = $no7_6_2_2;
            $no7_6_2_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>304,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_2_3 = $no7_6_2_3;
            $no7_6_2_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>305,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_2_4 = $no7_6_2_4;
            $no7_6_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>306,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_3_1 = $no7_6_3_1;
            $no7_6_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>307,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_3_2 = $no7_6_3_2;
            $no7_6_3_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>308,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_3_3 = $no7_6_3_3;
            $no7_6_3_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>309,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_3_4 = $no7_6_3_4;
            $no7_6_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>310,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_4_1 = $no7_6_4_1;
            $no7_6_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>311,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_4_2 = $no7_6_4_2;
            $no7_6_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>312,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_4_3 = $no7_6_4_3;
            $no7_6_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>313,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_4_4 = $no7_6_4_4;
            $no7_6_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>314,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_5_1 = $no7_6_5_1;
            $no7_6_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>315,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_5_2 = $no7_6_5_2;
            $no7_6_5_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>316,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_5_3 = $no7_6_5_3;
            $no7_6_5_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>317,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_6_5_4 = $no7_6_5_4;
            $no7_7 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>318,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_7 = $no7_7;
            $no7_8 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>319,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_8 = $no7_8;
            $no7_9 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>320,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_9 = $no7_9;
            $no7_10 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>321,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_10 = $no7_10;
            $no7_11 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>322,
                                    2=>$this->surveyid)))->answer;
            $this->view->no7_11 = $no7_11;
          }
    }
    public function no8Action()
    {

        // no1 JS Assets
        $this->assets->collection('modules-clinic-no8-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no8.js')
            ->setTargetUri('assets/modules-clinic-no8.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no8.js');
    }
    public function no9Action()
    {
      // no9 JS Assets
      $this->assets->collection('modules-clinic-no9-js')
          ->setLocal(true)
          ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
          ->setTargetPath(ROOT . '/assets/modules-clinic-no9.js')
          ->setTargetUri('assets/modules-clinic-no9.js')
          ->join(true)
          ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no9.js');
                    $auth = $this->session->get('auth');
                    $user = AdminUser::findFirst($auth->id);

          if ($this->request->isPost()) {
              $option = $this->request->getPost("option");
              $this->view->disable();
              $post = $this->request->getPost();

              $answer = $this->request->getPost("no9_1");
              $this->updateAnswer($option, 373, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_2");
              $this->updateAnswer($option, 374, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_3_1");
              $this->updateAnswer($option, 375, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_3_2");
              $this->updateAnswer($option, 376, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_4_1");
              $this->updateAnswer($option, 377, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_4_2");
              $this->updateAnswer($option, 378, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_4_3");
              $this->updateAnswer($option, 379, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_4_4");
              $this->updateAnswer($option, 380, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_4_5");
              $this->updateAnswer($option, 381, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_5_1");
              $this->updateAnswer($option, 382, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_5_2");
              $this->updateAnswer($option, 383, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_5_3");
              $this->updateAnswer($option, 384, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no9_6");
              $this->updateAnswer($option, 385, $answer, $user->officeid,  $this->discovery_surveyid);
          }
          else {
            $no9_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>373,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_1 = $no9_1;
            $no9_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>374,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_2 = $no9_2;
            $no9_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>375,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_3_1 = $no9_3_1;
            $no9_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>376,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_3_2 = $no9_3_2;
            $no9_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>377,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_4_1 = $no9_4_1;
            $no9_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>378,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_4_2 = $no9_4_2;
            $no9_4_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>379,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_4_3 = $no9_4_3;
            $no9_4_4 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>380,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_4_4 = $no9_4_4;
            $no9_4_5 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>381,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_4_5 = $no9_4_5;
            $no9_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>382,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_5_1 = $no9_5_1;
            $no9_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>383,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_5_2 = $no9_5_2;
            $no9_5_3 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>384,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_5_3 = $no9_5_3;
            $no9_6 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>385,
                                    2=>$this->surveyid)))->answer;
            $this->view->no9_6 = $no9_6;
          }
    }

}
