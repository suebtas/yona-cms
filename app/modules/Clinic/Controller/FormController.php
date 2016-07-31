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
            $this->view->disable();
            $post = $this->request->getPost();


            $option = $this->request->getPost("option");
            $answer = $this->request->getPost("no1_1_2");
            $this->updateAnswer($option, 2, $answer, $user->officeid,  $this->discovery_surveyid);


            $option = $this->request->getPost("option");
            $officeID = $this->request->getPost("no1_1_3_1");
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

            $answer = $this->request->getPost("no1_2_3_1");
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

            $answer = $this->request->getPost("no1_2_7_3");
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
    }

}
