<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Clinic\Model\BoundaryOffice;
use Clinic\Model\BoundaryTambon;
use Clinic\Model\DiscoverySurvey;
use Clinic\Model\Answer;
use Clinic\Model\Comment;
use Phalcon\Mvc\Model\Resultset;
use Clinic\Form\Question\No1Form;

class FormController extends Controller
{

    public function initialize()
    {

        $auth = $this->session->get('auth');
        $this->user = AdminUser::findFirst($auth->id);

        if(in_array($this->user->role, ['cc-admin','cc-approver'])) //ถ้า เป็น cc-admin และ cc-approver ให้ไปหน้า review
            return $this->redirect($this->url->get() . 'clinic/review/'. $this->router->getActionName());

        if(!$this->session->has('discovery_surveyid')){
            $this->discoverySurvey = DiscoverySurvey::findFirst(array("officeid=?0","bind"=>$this->user->officeid));
            if($this->discoverySurvey==null){
                $this->discoverySurvey = new DiscoverySurvey();
                $this->discoverySurvey->officeid  = $this->user->officeid;
                $this->discoverySurvey->surveyid  = 1;
                $this->discoverySurvey->status    = 0;
                $this->discoverySurvey->save();                
            }
            $this->session->set('surveyid', $this->discoverySurvey->Survey->id);
            $this->session->set('discovery_surveyid', $this->discoverySurvey->id);
        }

        $this->surveyid = $this->session->get('surveyid');
        $this->discovery_surveyid = $this->session->get('discovery_surveyid');

        $this->setClinicEnvironment();
        $this->view->languages_disabled = true;
        if(!isset($this->discoverySurvey)){
            $this->discoverySurvey = DiscoverySurvey::findFirst($this->discovery_surveyid);
        }
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


        //กำหนดค่าใน view
        $this->view->user = $this->user;
        $this->view->office =  Office::findFirst($this->user->officeid);        
        $this->view->status = $this->discoverySurvey->status;
    }


    public function showDiscoverySurveyAction($id){
        $this->session->set('surveyid', $id);
        $this->session->set('discovery_surveyid', $id);
        $this->discovery_surveyid = $this->session->get('surveyid');
        $this->discovery_surveyid = $this->session->get('discovery_surveyid');
        $this->discoverySurvey = DiscoverySurvey::findFirst($this->discovery_surveyid);
        return $this->redirect($this->url->get() . 'clinic/form/no1');
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
          }elseif($option=='add-by-answer'){
              $modelT = new Answer();
              $modelT->officeid = $officeid;
              $modelT->discovery_surveyid = $discovery_surveyid;
              $modelT->questionid = $questionid;
              $modelT->answer = $answer;
              if($modelT->save()==false)
                  echo 'error';
              else
                  echo 'ok';
          }elseif($option=='delete-by-answer'){
              $modelT = Answer::findFirst(
                  array("questionid=?1 and discovery_surveyid=?2 and answer=?3",
                      "bind"=>array(
                          1=>$questionid,
                          2=>$discovery_surveyid,
                          3=>$answer)));
              $modelT->delete();
              echo 'delete';
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
    public function createViewNo1(){
        $form = new No1Form();

            $no1_3_1 = $no1_3_2 = $no1_3_3 = $no1_3_4 = [];

            $no1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>2,
                                    2=>$this->discovery_surveyid)))->answer;
           $no1_2_1_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>7,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_1_1 = $no1_2_1_1;

            $no1_2_1_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>8,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_1_2 = $no1_2_1_2;

            $no1_2_2_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>9,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_2_1 = $no1_2_2_1;

            $no1_2_2_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>10,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_2_2 = $no1_2_2_2;

            $no1_2_3_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>11,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_3_1 = $no1_2_3_1;

            $no1_2_3_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>12,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_3_2 = $no1_2_3_2;

            $no1_2_4_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>13,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_4_1 = $no1_2_4_1;

            $no1_2_4_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>14,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_4_2 = $no1_2_4_2;

            $no1_2_5_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>15,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_5_1 = $no1_2_5_1;


            $no1_2_5_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>16,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_5_2 = $no1_2_5_2;

            $no1_2_6_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>17,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_6_1 = $no1_2_6_1;

            $no1_2_6_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>397,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_6_2 = $no1_2_6_2;

            $no1_2_7_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>18,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_7_1 = $no1_2_7_1;

            $no1_2_7_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>398,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_7_2 = $no1_2_7_2;

            $no1_2_8_1 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>19,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_8_1 = $no1_2_8_1;

            $no1_2_8_2 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>399,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_8_2 = $no1_2_8_2;

            $no1_2_9 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>20,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_9 = $no1_2_9;

            $no1_2_10 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>21,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_10 = $no1_2_10;

            $no1_2_11 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>22,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_11 = $no1_2_11;

            $no1_2_12 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>23,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_12 = $no1_2_12;
            $no1_2_13 = Answer::findFirst(
                            array("questionid=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>24,
                                    2=>$this->discovery_surveyid)))->answer;
            $this->view->no1_2_13 = $no1_2_13;

            $no1_3_1 = BoundaryTambon::toArrayCloseTambonID(
                        array("owner_officeid = ?1 and boundaryid = 1",
                            "bind" => array(
                                1=>$this->user->officeid
                                )
                            )
                        );
            $no1_3_2 = BoundaryTambon::toArrayCloseTambonID(
                        array("owner_officeid = ?1 and boundaryid = 2",
                            "bind" => array(
                                1=>$this->user->officeid
                                )
                            )
                        );
            $no1_3_3 = BoundaryTambon::toArrayCloseTambonID(
                        array("owner_officeid = ?1 and boundaryid = 3",
                            "bind" => array(
                                1=>$this->user->officeid
                                )
                            )
                        );
            $no1_3_4 = BoundaryTambon::toArrayCloseTambonID(
                        array("owner_officeid = ?1 and boundaryid = 4",
                            "bind" => array(
                                1=>$this->user->officeid
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
    }
    public function no1Action()
    {
        if(in_array($this->user->role, ['cc-admin','cc-approver']))
            return $this->redirect($this->url->get() . 'clinic/review/no1');
        // no1 JS Assets
        $this->assets->collection('modules-clinic-no1-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no1.js')
            ->setTargetUri('assets/modules-clinic-no1.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no1.js');

        $auth = $this->session->get('auth');
        $user = AdminUser::findFirst($auth->id);
        if (!$this->request->isPost()) {
            $this->createViewNo1();
            $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 1 and 2","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));

        }elseif ($this->request->isPost()) {
            $this->view->disable();
            $post = $this->request->getPost();
            $option = $this->request->getPost("option");

            $answer = $this->request->getPost("no1_1_2");
            $this->updateAnswer($option, 2, $answer, $user->officeid,  $this->discovery_surveyid);


            $option = $this->request->getPost("option");
            $tambonID = $this->request->getPost("no1_1_3_1");
            if($tambonID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryTambon();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_tambonid = $tambonID;
                    $modelT->boundaryid = 1;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                    $answer = $modelT->Tambon->name;
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryTambon::findFirst(
                        array("close_tambonid = ?1 and owner_officeid = ?2 and boundaryid = 1", //North เหนือ
                            "bind"=>array(
                                1=>$tambonID,
                                2=>$user->officeid)
                            )
                        );
                    $answer = $modelT->Tambon->name;
                    $modelT->delete();
                }
                $this->updateAnswer($option.'-by-answer', 3, $answer, $user->officeid,  $this->discovery_surveyid);

            }

            $tambonID = $this->request->getPost("no1_1_3_2");
            if($tambonID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryTambon();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_tambonid = $tambonID;
                    $modelT->boundaryid = 2;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                    $answer = $modelT->Tambon->name;
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryTambon::findFirst(
                        array("close_tambonid = ?1 and owner_officeid = ?2 and boundaryid = 2", //South ใต้
                            "bind"=>array(
                                1=>$tambonID,
                                2=>$user->officeid)
                            )
                        );
                    $answer = $modelT->Tambon->name;
                    $modelT->delete();
                }
                $this->updateAnswer($option, 4, $answer, $user->officeid,  $this->discovery_surveyid);

            }

            $tambonID = $this->request->getPost("no1_1_3_3");
            if($tambonID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryTambon();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_tambonid = $tambonID;
                    $modelT->boundaryid = 3;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                    $answer = $modelT->Tambon->name;
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryTambon::findFirst(
                        array("close_tambonid = ?1 and owner_officeid = ?2 and boundaryid = 3", //West ตะวันตก
                            "bind"=>array(
                                1=>$tambonID,
                                2=>$user->officeid)
                            )
                        );
                    $answer = $modelT->Tambon->name;
                    $modelT->delete();
                }
                $this->updateAnswer($option, 5, $answer, $user->officeid,  $this->discovery_surveyid);
            }

            $tambonID = $this->request->getPost("no1_1_3_4");
            if($tambonID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryTambon();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_tambonid = $tambonID;
                    $modelT->boundaryid = 4;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                    $answer = $modelT->Tambon->name;
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryTambon::findFirst(
                        array("close_tambonid = ?1 and owner_officeid = ?2 and boundaryid = 4", //East ตะวันออก
                            "bind"=>array(
                                1=>$tambonID,
                                2=>$user->officeid)
                            )
                        );
                    $answer = $modelT->Tambon->name;
                    $modelT->delete();
                }
                $this->updateAnswer($option, 6, $answer, $user->officeid,  $this->discovery_surveyid);
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
            $this->updateAnswer($option, 397, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_7_1");
            $this->updateAnswer($option, 18, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_7_2");
            $this->updateAnswer($option, 398, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_8_1");
            $this->updateAnswer($option, 19, $answer, $user->officeid,  $this->discovery_surveyid);            
            $answer = $this->request->getPost("no1_2_8_2");
            $this->updateAnswer($option, 399, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_9");
            $this->updateAnswer($option, 20, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_10");
            $this->updateAnswer($option, 21, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_11");
            $this->updateAnswer($option, 22, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_12");
            $this->updateAnswer($option, 23, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no1_2_13");
            $this->updateAnswer($option, 24, $answer, $user->officeid,  $this->discovery_surveyid);

            $status = $this->request->getPost("no1_finish");
            if($status != ""){
                $discoverySurvey = DiscoverySurvey::findFirst(array("id=?0","bind"=>array($this->discovery_surveyid)));
                $discoverySurvey->status = 2;
                $discoverySurvey->save();
                echo 'ok';
            }

        }

    }
    public function createViewNo2(){
        $no2_1_1 = Answer::findFirst(
                    array("questionid=?1 and discovery_surveyid=?2",
                                  "bind"=>array(
                                      1=>25,
                                      2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_1 = $no2_1_1;
        $no2_1_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>26,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_2_1 = $no2_1_2_1;
        $no2_1_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>27,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_2_2 = $no2_1_2_2;
        $no2_1_3_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>28,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_3_1 = $no2_1_3_1;
        $no2_1_3_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>29,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_3_2 = $no2_1_3_2;
        $no2_1_4_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>30,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_4_1 = $no2_1_4_1;
        $no2_1_4_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>31,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_4_2 = $no2_1_4_2;
        $no2_1_5_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>32,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_5_1 = $no2_1_5_1;
        $no2_1_5_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>33,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_5_2 = $no2_1_5_2;
        $no2_1_5_3= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>34,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_5_3 = $no2_1_5_3;
        $no2_1_6= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>35,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_1_6 = $no2_1_6;
        $no2_2_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>36,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_2_1 = $no2_2_1;
        $no2_2_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>37,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_2_2 = $no2_2_2;
        $no2_3_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>38,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_3_1 = $no2_3_1;
        $no2_3_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>39,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_3_2 = $no2_3_2;
        $no2_3_3= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>40,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_3_3 = $no2_3_3;
        $no2_3_4= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>41,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_3_4 = $no2_3_4;
        $no2_3_5= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>42,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_3_5 = $no2_3_5;
        $no2_3_6= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>43,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_3_6 = $no2_3_6;
        $no2_3_7= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>44,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_3_7 = $no2_3_7;
        $no2_4_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>45,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_4_1 = $no2_4_1;
        $no2_4_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>46,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_4_2 = $no2_4_2;
        $no2_4_3= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>47,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_4_3 = $no2_4_3;
        $no2_4_4= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>48,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_4_4 = $no2_4_4;
        $no2_5_1= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>49,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_5_1 = $no2_5_1;
        $no2_5_2= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>50,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_5_2 = $no2_5_2;
        $no2_5_3= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>51,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_5_3 = $no2_5_3;
        $no2_5_4= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>52,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_5_4 = $no2_5_4;
        $no2_5_5= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>53,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_5_5 = $no2_5_5;
        $no2_5_6= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>54,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_5_6 = $no2_5_6;
        $no2_5_7= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>55,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_5_7 = $no2_5_7;
        $no2_5_8= Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>56,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no2_5_8 = $no2_5_8;
    }
    public function no2Action()
    {
        if(in_array($this->user->role, ['cc-admin','cc-approver']))
            return $this->redirect($this->url->get() . 'clinic/review/no2');
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
                $answer = $this->request->getPost("no2_3_1");
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
              $this->createViewNo2();              
              $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 3 and 6","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
            }
    }
    public function createViewNo3(){
        $no3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>57,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_1 = $no3_1;
        $no3_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>58,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_2_1 = $no3_2_1;
        $no3_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>59,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_2_2 = $no3_2_2;
        $no3_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>60,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_2_3 = $no3_2_3;
        $no3_2_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>61,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_2_4 = $no3_2_4;
        $no3_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>62,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_3_1 = $no3_3_1;
        $no3_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>63,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_3_2 = $no3_3_2;
        $no3_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>64,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_3_3 = $no3_3_3;
        $no3_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>65,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_4_1 = $no3_4_1;
        $no3_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>66,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_4_2 = $no3_4_2;
        $no3_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>67,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_4_3 = $no3_4_3;
        $no3_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>68,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_4_4 = $no3_4_4;
        $no3_5_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>69,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_5_1 = $no3_5_1;
        $no3_5_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>70,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_5_2 = $no3_5_2;
        $no3_6_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>71,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_6_1 = $no3_6_1;
        $no3_6_2= Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>72,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_6_2 = $no3_6_2;
        $no3_6_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>73,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no3_6_3 = $no3_6_3;
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
              $answer = $this->request->getPost("no3_3_1");
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
                $this->createViewNo3();
                $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 7 and 11","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
          }
    }
    public function createViewNo4(){
        $no4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>74,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_1 = $no4_1;

        $no4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>75,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_2 = $no4_2;

        $no4_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>76,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_3_1 = $no4_3_1;

        $no4_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>77,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_3_2 = $no4_3_2;

        $no4_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>78,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_3_3 = $no4_3_3;

        $no4_3_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>79,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_3_4 = $no4_3_4;

        $no4_3_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>80,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_3_5 = $no4_3_5;

        $no4_3_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>81,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_3_6 = $no4_3_6;

        $no4_3_7 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>82,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_3_7 = $no4_3_7;

        $no4_3_8 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>83,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_3_8 = $no4_3_8;

        $no4_4_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>84,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_1_1 = $no4_4_1_1;

        $no4_4_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>85,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_1_2 = $no4_4_1_2;

        $no4_4_1_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>86,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_1_3 = $no4_4_1_3;

        $no4_4_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>87,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_2_1 = $no4_4_2_1;

        $no4_4_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>88,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_2_2 = $no4_4_2_2;

        $no4_4_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>89,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_2_3 = $no4_4_2_3;

        $no4_4_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>90,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_3_1 = $no4_4_3_1;

        $no4_4_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>91,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_3_2 = $no4_4_3_2;

        $no4_4_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>92,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_3_3 = $no4_4_3_3;

        $no4_4_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>93,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_4_1 = $no4_4_4_1;

        $no4_4_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>94,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_4_2 = $no4_4_4_2;

        $no4_4_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>95,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_4_3 = $no4_4_4_3;

        $no4_4_5_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>96,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_5_1 = $no4_4_5_1;

        $no4_4_5_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>97,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_5_2 = $no4_4_5_2;

        $no4_4_5_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>98,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_4_5_3 = $no4_4_5_3;

        $no4_5_1_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>99,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_1_1 = $no4_5_1_1_1;

        $no4_5_1_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>100,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_1_2 = $no4_5_1_1_2;

        $no4_5_1_1_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>101,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_1_3 = $no4_5_1_1_3;

        $no4_5_1_1_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>102,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_1_4 = $no4_5_1_1_4;

        $no4_5_1_1_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>103,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_1_5 = $no4_5_1_1_5;

        $no4_5_1_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>104,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_2_1 = $no4_5_1_2_1;

        $no4_5_1_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>105,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_2_2 = $no4_5_1_2_2;

        $no4_5_1_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>106,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_2_3 = $no4_5_1_2_3;

        $no4_5_1_2_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>107,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_2_4 = $no4_5_1_2_4;

        $no4_5_1_2_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>108,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_2_5 = $no4_5_1_2_5;

        $no4_5_1_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>109,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_3_1 = $no4_5_1_3_1;

        $no4_5_1_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>110,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_3_2 = $no4_5_1_3_2;

        $no4_5_1_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>111,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_3_3 = $no4_5_1_3_3;

        $no4_5_1_3_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>112,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_3_4 = $no4_5_1_3_4;

        $no4_5_1_3_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>113,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_3_5 = $no4_5_1_3_5;

        $no4_5_1_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>114,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_4_1 = $no4_5_1_4_1;

        $no4_5_1_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>115,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_4_2 = $no4_5_1_4_2;

        $no4_5_1_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>116,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_4_3 = $no4_5_1_4_3;

        $no4_5_1_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>117,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_4_4 = $no4_5_1_4_4;

        $no4_5_1_4_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>118,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_1_4_5 = $no4_5_1_4_5;

        $no4_5_2_1_1 = Answer::findFirst(
            array("questionid=?1 and discovery_surveyid=?2",
                "bind"=>array(
                    1=>119,
                    2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_1_1 = $no4_5_2_1_1;

        //no4_5_2_1_2
        $no4_5_2_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>120,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_1_2 = $no4_5_2_1_2;

        $no4_5_2_1_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>121,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_1_3 = $no4_5_2_1_3;

        $no4_5_2_1_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>122,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_1_4 = $no4_5_2_1_4;

        $no4_5_2_1_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>123,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_1_5 = $no4_5_2_1_5;

        $no4_5_2_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>124,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_2_1 = $no4_5_2_2_1;

        $no4_5_2_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>125,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_2_2 = $no4_5_2_2_2;

        $no4_5_2_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>126,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_2_3 = $no4_5_2_2_3;

        $no4_5_2_2_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>127,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_2_4 = $no4_5_2_2_4;

        $no4_5_2_2_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>128,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_2_5 = $no4_5_2_2_5;

        $no4_5_2_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>129,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_3_1 = $no4_5_2_3_1;

        $no4_5_2_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>130,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_3_2 = $no4_5_2_3_2;

        $no4_5_2_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>131,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_3_3 = $no4_5_2_3_3;

        $no4_5_2_3_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>132,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_3_4 = $no4_5_2_3_4;

        $no4_5_2_3_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>133,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_3_5 = $no4_5_2_3_5;

        $no4_5_2_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>134,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_4_1 = $no4_5_2_4_1;

        $no4_5_2_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>135,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_4_2 = $no4_5_2_4_2;

        $no4_5_2_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>136,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_4_3 = $no4_5_2_4_3;

        $no4_5_2_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>137,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_4_4 = $no4_5_2_4_4;

        $no4_5_2_4_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>138,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_2_4_5 = $no4_5_2_4_5;

        //no4_5_3_1_1
        $no4_5_3_1_1 = Answer::findFirst(
            array("questionid=?1 and discovery_surveyid=?2",
                "bind"=>array(
                    1=>139,
                    2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_1_1 = $no4_5_3_1_1;

        $no4_5_3_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>140,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_1_2 = $no4_5_3_1_2;

        $no4_5_3_1_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>141,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_1_3 = $no4_5_3_1_3;

        $no4_5_3_1_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>142,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_1_4 = $no4_5_3_1_4;

        $no4_5_3_1_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>133,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_1_5 = $no4_5_3_1_5;

        $no4_5_3_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>144,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_2_1 = $no4_5_3_2_1;

        $no4_5_3_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>145,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_2_2 = $no4_5_3_2_2;

        $no4_5_3_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>146,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_2_3 = $no4_5_3_2_3;

        $no4_5_3_2_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>147,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_2_4 = $no4_5_3_2_4;

        $no4_5_3_2_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>148,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_2_5 = $no4_5_3_2_5;

        $no4_5_3_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>149,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_3_1 = $no4_5_3_3_1;

        $no4_5_3_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>150,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_3_2 = $no4_5_3_3_2;

        $no4_5_3_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>151,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_3_3 = $no4_5_3_3_3;

        $no4_5_3_3_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>152,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_3_4 = $no4_5_3_3_4;

        $no4_5_3_3_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>153,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_3_5 = $no4_5_3_3_5;

        $no4_5_3_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>154,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_4_1 = $no4_5_3_4_1;

        $no4_5_3_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>155,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_4_2 = $no4_5_3_4_2;

        $no4_5_3_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>156,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_4_3 = $no4_5_3_4_3;

        $no4_5_3_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>157,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_4_4 = $no4_5_3_4_4;

        $no4_5_3_4_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>158,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_3_4_5 = $no4_5_3_4_5;

        //no4_5_4_1_1
        $no4_5_4_1_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>159,
                              2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_1_1 = $no4_5_4_1_1;

        $no4_5_4_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>160,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_1_2 = $no4_5_4_1_2;

        $no4_5_4_1_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>161,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_1_3 = $no4_5_4_1_3;

        $no4_5_4_1_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>162,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_1_4 = $no4_5_4_1_4;

        $no4_5_4_1_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>163,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_1_5 = $no4_5_4_1_5;

        $no4_5_4_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>164,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_2_1 = $no4_5_4_2_1;

        $no4_5_4_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>165,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_2_2 = $no4_5_4_2_2;

        $no4_5_4_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>166,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_2_3 = $no4_5_4_2_3;

        $no4_5_4_2_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>167,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_2_4 = $no4_5_4_2_4;

        $no4_5_4_2_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>168,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_2_5 = $no4_5_4_2_5;

        $no4_5_4_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>169,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_3_1 = $no4_5_4_3_1;

        $no4_5_4_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>170,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_3_2 = $no4_5_4_3_2;

        $no4_5_4_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>171,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_3_3 = $no4_5_4_3_3;

        $no4_5_4_3_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>172,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_3_4 = $no4_5_4_3_4;

        $no4_5_4_3_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>173,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_3_5 = $no4_5_4_3_5;

        $no4_5_4_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>174,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_4_1 = $no4_5_4_4_1;

        $no4_5_4_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>175,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_4_2 = $no4_5_4_4_2;

        $no4_5_4_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>176,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_4_3 = $no4_5_4_4_3;

        $no4_5_4_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>177,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_4_4 = $no4_5_4_4_4;

        $no4_5_4_4_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>178,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_5_4_4_5 = $no4_5_4_4_5;

        $no4_6_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>179,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_6_1 = $no4_6_1;

        $no4_6_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>180,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_6_2 = $no4_6_2;

        $no4_6_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>181,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_6_3 = $no4_6_3;

        $no4_6_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>182,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_6_4 = $no4_6_4;

        $no4_6_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>183,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_6_5 = $no4_6_5;

        $no4_6_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>184,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_6_6 = $no4_6_6;

        $no4_6_7 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>185,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_6_7 = $no4_6_7;

        $no4_6_8_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>186,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_6_8_1 = $no4_6_8_1;

        $no4_6_8_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>187,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no4_6_8_2 = $no4_6_8_2;
    }
    public function no4Action(){
        $this->assets->collection('modules-clinic-no4-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no4.js')
            ->setTargetUri('assets/modules-clinic-no4.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no4.js');

        if (!$this->request->isPost())
        {
            $this->createViewNo4();
            $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 12 and 16","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
        }elseif ($this->request->isPost()) {
            $this->view->disable();
            $post = $this->request->getPost();
            $option = $this->request->getPost("option");

            $answer = $this->request->getPost("no4_1");
            $this->updateAnswer($option, 74, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_2");
            $this->updateAnswer($option, 75, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_3_1");
            $this->updateAnswer($option, 76, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_3_2");
            $this->updateAnswer($option, 77, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_3_3");
            $this->updateAnswer($option, 78, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_3_4");
            $this->updateAnswer($option, 79, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_3_5");
            $this->updateAnswer($option, 80, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_3_6");
            $this->updateAnswer($option, 81, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_3_7");
            $this->updateAnswer($option, 82, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_3_8");
            $this->updateAnswer($option, 83, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_1_1");
            $this->updateAnswer($option, 84, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_1_2");
            $this->updateAnswer($option, 85, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_1_3");
            $this->updateAnswer($option, 86, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_2_1");
            $this->updateAnswer($option, 87, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_2_2");
            $this->updateAnswer($option, 88, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_2_3");
            $this->updateAnswer($option, 89, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_3_1");
            $this->updateAnswer($option, 90, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_3_2");
            $this->updateAnswer($option, 91, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_3_3");
            $this->updateAnswer($option, 92, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_4_1");
            $this->updateAnswer($option, 93, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_4_2");
            $this->updateAnswer($option, 94, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_4_3");
            $this->updateAnswer($option, 95, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_5_1");
            $this->updateAnswer($option, 96, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_5_2");
            $this->updateAnswer($option, 97, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_4_5_3");
            $this->updateAnswer($option, 98, $answer, $this->user->officeid,  $this->discovery_surveyid);

            //no4_5_1_1_1
            $answer = $this->request->getPost("no4_5_1_1_1");
            $this->updateAnswer($option, 99, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_1_2");
            $this->updateAnswer($option, 100, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_1_3");
            $this->updateAnswer($option, 101, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_1_4");
            $this->updateAnswer($option, 102, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_1_5");
            $this->updateAnswer($option, 103, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_5_1_2_1");
            $this->updateAnswer($option, 104, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_2_2");
            $this->updateAnswer($option, 105, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_2_3");
            $this->updateAnswer($option, 106, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_2_4");
            $this->updateAnswer($option, 107, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_2_5");
            $this->updateAnswer($option, 108, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_3_1");
            $this->updateAnswer($option, 109, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_3_2");
            $this->updateAnswer($option, 110, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_3_3");
            $this->updateAnswer($option, 111, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_3_4");
            $this->updateAnswer($option, 112, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_3_5");
            $this->updateAnswer($option, 113, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_4_1");
            $this->updateAnswer($option, 114, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_4_2");
            $this->updateAnswer($option, 115, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_4_3");
            $this->updateAnswer($option, 116, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_4_4");
            $this->updateAnswer($option, 117, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_1_4_5");
            $this->updateAnswer($option, 118, $answer, $this->user->officeid,  $this->discovery_surveyid);

            //no4_5_2_1_1
            $answer = $this->request->getPost("no4_5_2_1_1");
            $this->updateAnswer($option, 119, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_1_2");
            $this->updateAnswer($option, 120, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_1_3");
            $this->updateAnswer($option, 121, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_1_4");
            $this->updateAnswer($option, 122, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_1_5");
            $this->updateAnswer($option, 123, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_5_2_2_1");
            $this->updateAnswer($option, 124, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_2_2");
            $this->updateAnswer($option, 125, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_2_3");
            $this->updateAnswer($option, 126, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_2_4");
            $this->updateAnswer($option, 127, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_2_5");
            $this->updateAnswer($option, 128, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_3_1");
            $this->updateAnswer($option, 129, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_3_2");
            $this->updateAnswer($option, 130, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_3_3");
            $this->updateAnswer($option, 131, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_3_4");
            $this->updateAnswer($option, 132, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_3_5");
            $this->updateAnswer($option, 133, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_4_1");
            $this->updateAnswer($option, 134, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_4_2");
            $this->updateAnswer($option, 135, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_4_3");
            $this->updateAnswer($option, 136, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_4_4");
            $this->updateAnswer($option, 137, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_2_4_5");
            $this->updateAnswer($option, 138, $answer, $this->user->officeid,  $this->discovery_surveyid);

            //no4_5_3_1_1
            $answer = $this->request->getPost("no4_5_3_1_1");
            $this->updateAnswer($option, 139, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_1_2");
            $this->updateAnswer($option, 140, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_1_3");
            $this->updateAnswer($option, 141, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_1_4");
            $this->updateAnswer($option, 142, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_1_5");
            $this->updateAnswer($option, 143, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_5_3_2_1");
            $this->updateAnswer($option, 144, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_2_2");
            $this->updateAnswer($option, 145, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_2_3");
            $this->updateAnswer($option, 146, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_2_4");
            $this->updateAnswer($option, 147, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_2_5");
            $this->updateAnswer($option, 148, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_3_1");
            $this->updateAnswer($option, 149, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_3_2");
            $this->updateAnswer($option, 150, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_3_3");
            $this->updateAnswer($option, 151, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_3_4");
            $this->updateAnswer($option, 152, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_3_5");
            $this->updateAnswer($option, 153, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_4_1");
            $this->updateAnswer($option, 154, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_4_2");
            $this->updateAnswer($option, 155, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_4_3");
            $this->updateAnswer($option, 156, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_4_4");
            $this->updateAnswer($option, 157, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_3_4_5");
            $this->updateAnswer($option, 158, $answer, $this->user->officeid,  $this->discovery_surveyid);

            //no4_5_4_1_1
            $answer = $this->request->getPost("no4_5_4_1_1");
            $this->updateAnswer($option, 159, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_1_2");
            $this->updateAnswer($option, 160, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_1_3");
            $this->updateAnswer($option, 161, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_1_4");
            $this->updateAnswer($option, 162, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_1_5");
            $this->updateAnswer($option, 163, $answer, $this->user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no4_5_4_2_1");
            $this->updateAnswer($option, 164, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_2_2");
            $this->updateAnswer($option, 165, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_2_3");
            $this->updateAnswer($option, 166, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_2_4");
            $this->updateAnswer($option, 167, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_2_5");
            $this->updateAnswer($option, 168, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_3_1");
            $this->updateAnswer($option, 169, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_3_2");
            $this->updateAnswer($option, 170, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_3_3");
            $this->updateAnswer($option, 171, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_3_4");
            $this->updateAnswer($option, 172, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_3_5");
            $this->updateAnswer($option, 173, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_4_1");
            $this->updateAnswer($option, 174, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_4_2");
            $this->updateAnswer($option, 175, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_4_3");
            $this->updateAnswer($option, 176, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_4_4");
            $this->updateAnswer($option, 177, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_5_4_4_5");
            $this->updateAnswer($option, 178, $answer, $this->user->officeid,  $this->discovery_surveyid);

            //4_6
            $answer = $this->request->getPost("no4_6_1");
            $this->updateAnswer($option, 179, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_6_2");
            $this->updateAnswer($option, 180, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_6_3");
            $this->updateAnswer($option, 181, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_6_4");
            $this->updateAnswer($option, 182, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_6_5");
            $this->updateAnswer($option, 183, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_6_6");
            $this->updateAnswer($option, 184, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_6_7");
            $this->updateAnswer($option, 185, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_6_8_1");
            $this->updateAnswer($option, 186, $answer, $this->user->officeid,  $this->discovery_surveyid);
            $answer = $this->request->getPost("no4_6_8_2");
            $this->updateAnswer($option, 187, $answer, $this->user->officeid,  $this->discovery_surveyid);


        }

    }
    public function createViewNo5(){

        $no5_1_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>188,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_1_1_1 = $no5_1_1_1;

        $no5_1_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>189,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_1_1_2 = $no5_1_1_2;

        $no5_1_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>190,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_1_2_1 = $no5_1_2_1;

        $no5_1_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>191,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_1_2_2 = $no5_1_2_2;

        $no5_1_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>192,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_1_3_1 = $no5_1_3_1;

        $no5_1_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>193,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_1_3_2 = $no5_1_3_2;

        $no5_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>194,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_2 = $no5_2;

        $no5_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>195,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_1 = $no5_3_1;

        $no5_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>196,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_2 = $no5_3_2;

        $no5_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>197,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_3 = $no5_3_3;

        $no5_3_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>198,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_4 = $no5_3_4;

        $no5_3_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>199,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_5 = $no5_3_5;

        $no5_3_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>200,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_6 = $no5_3_6;

        $no5_3_7 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>201,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_7 = $no5_3_7;

        $no5_3_8 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>202,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_8 = $no5_3_8;

        $no5_3_9 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>203,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_9 = $no5_3_9;

        $no5_3_10_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>204,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_10_1 = $no5_3_10_1;

        $no5_3_10_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>205,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_3_10_2 = $no5_3_10_2;

        //no5_4
        $no5_4_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>206,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_1_1 = $no5_4_1_1;

        $no5_4_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>207,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_1_2 = $no5_4_1_2;

        $no5_4_1_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>208,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_1_3 = $no5_4_1_3;

        $no5_4_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>209,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_2_1 = $no5_4_2_1;

        $no5_4_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>210,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_2_2 = $no5_4_2_2;

        $no5_4_2_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>211,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_2_3 = $no5_4_2_3;

        $no5_4_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>212,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_3_1 = $no5_4_3_1;

        $no5_4_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>213,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_3_2 = $no5_4_3_2;

        $no5_4_3_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>214,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_3_3 = $no5_4_3_3;

        $no5_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>215,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_4_4 = $no5_4_4;

        //no5_5
        $no5_5_1_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>216,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_5_1_1 = $no5_5_1_1;

        $no5_5_1_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>217,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_5_1_2 = $no5_5_1_2;

        $no5_5_2_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>218,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_5_2_1 = $no5_5_2_1;

        $no5_5_2_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>219,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_5_2_2 = $no5_5_2_2;

        //no5_6
        $no5_6_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>220,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_6_1 = $no5_6_1;

        $no5_6_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>221,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_6_2 = $no5_6_2;

        $no5_6_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>222,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_6_3 = $no5_6_3;

        $no5_6_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>223,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_6_4 = $no5_6_4;

        $no5_6_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>224,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no5_6_5 = $no5_6_5;
    }
    public function no5Action(){
        $this->assets->collection('modules-clinic-no5-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no5.js')
            ->setTargetUri('assets/modules-clinic-no5.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no5.js');

        if (!$this->request->isPost()) {
                $this->createViewNo5();

                $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 17 and 21","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
            }elseif ($this->request->isPost()) {
              $this->view->disable();
              $post = $this->request->getPost();
              $option = $this->request->getPost("option");

              $answer = $this->request->getPost("no5_1_1_1");
              $this->updateAnswer($option, 188, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_1_1_2");
              $this->updateAnswer($option, 189, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_1_2_1");
              $this->updateAnswer($option, 190, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no5_1_2_2");
              $this->updateAnswer($option, 191, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_1_3_1");
              $this->updateAnswer($option, 192, $answer, $user->officeid,  $this->discovery_surveyid);
              $answer = $this->request->getPost("no5_1_3_2");
              $this->updateAnswer($option, 193, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_2");
              $this->updateAnswer($option, 194, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_1");
              $this->updateAnswer($option, 195, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_2");
              $this->updateAnswer($option, 196, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_3");
              $this->updateAnswer($option, 197, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_4");
              $this->updateAnswer($option, 198, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_5");
              $this->updateAnswer($option, 199, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_6");
              $this->updateAnswer($option, 200, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_7");
              $this->updateAnswer($option, 201, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_8");
              $this->updateAnswer($option, 202, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_9");
              $this->updateAnswer($option, 203, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_10_1");
              $this->updateAnswer($option, 204, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_3_10_2");
              $this->updateAnswer($option, 205, $answer, $user->officeid,  $this->discovery_surveyid);

                //no5_4
              $answer = $this->request->getPost("no5_4_1_1");
              $this->updateAnswer($option, 206, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_4_1_2");
              $this->updateAnswer($option, 207, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_4_1_3");
              $this->updateAnswer($option, 208, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_4_2_1");
              $this->updateAnswer($option, 209, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_4_2_2");
              $this->updateAnswer($option, 210, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_4_2_3");
              $this->updateAnswer($option, 211, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_4_3_1");
              $this->updateAnswer($option, 212, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_4_3_2");
              $this->updateAnswer($option, 213, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_4_3_3");
              $this->updateAnswer($option, 214, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_4_4");
              $this->updateAnswer($option, 215, $answer, $user->officeid,  $this->discovery_surveyid);

                //no5_5
              $answer = $this->request->getPost("no5_5_1_1");
              $this->updateAnswer($option, 216, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_5_1_2");
              $this->updateAnswer($option, 217, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_5_2_1");
              $this->updateAnswer($option, 218, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_5_2_2");
              $this->updateAnswer($option, 219, $answer, $user->officeid,  $this->discovery_surveyid);

                //no5_6
              $answer = $this->request->getPost("no5_6_1");
              $this->updateAnswer($option, 220, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_6_2");
              $this->updateAnswer($option, 221, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_6_3");
              $this->updateAnswer($option, 222, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_6_4");
              $this->updateAnswer($option, 223, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no5_6_5");
              $this->updateAnswer($option, 224, $answer, $user->officeid,  $this->discovery_surveyid);

          }
    }
    public function createViewNo6(){
        $no6_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>225,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no6_1 = $no6_1;

        $no6_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>226,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no6_2 = $no6_2;

        $no6_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>227,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no6_3 = $no6_3;

        $no6_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>228,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no6_4 = $no6_4;

        $no6_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>229,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no6_5 = $no6_5;

        $no6_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>230,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no6_6 = $no6_6;

        $no6_7 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>231,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no6_7 = $no6_7;

        $no6_8 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>232,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no6_8 = $no6_8;

        $no6_9 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>233,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no6_9 = $no6_9;
    }
    public function no6Action(){
        $this->assets->collection('modules-clinic-no6-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no6.js')
            ->setTargetUri('assets/modules-clinic-no6.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no6.js');

        if (!$this->request->isPost()) {
            $this->createViewNo6();
            $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid = 22","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
        }elseif ($this->request->isPost()) {
            $this->view->disable();
            $post = $this->request->getPost();
            $option = $this->request->getPost("option");

            $answer = $this->request->getPost("no6_1");
            $this->updateAnswer($option, 225, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no6_2");
            $this->updateAnswer($option, 226, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no6_3");
            $this->updateAnswer($option, 227, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no6_4");
            $this->updateAnswer($option, 228, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no6_5");
            $this->updateAnswer($option, 229, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no6_6");
            $this->updateAnswer($option, 230, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no6_7");
            $this->updateAnswer($option, 231, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no6_8");
            $this->updateAnswer($option, 232, $answer, $user->officeid,  $this->discovery_surveyid);

            $answer = $this->request->getPost("no6_9");
            $this->updateAnswer($option, 233, $answer, $user->officeid,  $this->discovery_surveyid);

        }
    }

    public function createViewNo7(){
      $no7_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>234,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_1 = $no7_1;
      $no7_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>235,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_2_1 = $no7_2_1;
      $no7_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>236,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_2_2 = $no7_2_2;
      $no7_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>237,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_2_3 = $no7_2_3;
      $no7_3_1_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>238,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_1_1 = $no7_3_1_1;
      $no7_3_1_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>239,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_1_2 = $no7_3_1_2;
      $no7_3_1_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>240,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_1_3 = $no7_3_1_3;
      $no7_3_1_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>241,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_1_4 = $no7_3_1_4;
      $no7_3_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>242,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_2_1 = $no7_3_2_1;
      $no7_3_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>243,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_2_2 = $no7_3_2_2;
      $no7_3_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>244,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_2_3 = $no7_3_2_3;
      $no7_3_2_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>245,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_2_4 = $no7_3_2_4;
      $no7_3_3_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>246,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_3_1 = $no7_3_3_1;
      $no7_3_3_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>247,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_3_2 = $no7_3_3_2;
      $no7_3_3_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>248,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_3_3 = $no7_3_3_3;
      $no7_3_3_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>249,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_3_4 = $no7_3_3_4;
      $no7_3_4_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>250,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_4_1 = $no7_3_4_1;
      $no7_3_4_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>251,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_4_2 = $no7_3_4_2;
      $no7_3_4_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>252,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_4_3 = $no7_3_4_3;
      $no7_3_4_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>253,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_4_4 = $no7_3_4_4;
      $no7_3_5_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>254,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_5_1 = $no7_3_5_1;
      $no7_3_5_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>255,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_5_2 = $no7_3_5_2;
      $no7_3_5_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>256,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_5_3 = $no7_3_5_3;
      $no7_3_5_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>257,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_3_5_4 = $no7_3_5_4;
      $no7_4_1_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>258,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_1_1 = $no7_4_1_1;
      $no7_4_1_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>259,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_1_2 = $no7_4_1_2;
      $no7_4_1_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>260,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_1_3 = $no7_4_1_3;
      $no7_4_1_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>261,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_1_4 = $no7_4_1_4;
      $no7_4_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>262,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_2_1 = $no7_4_2_1;
      $no7_4_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>263,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_2_2 = $no7_4_2_2;
      $no7_4_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>264,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_2_3 = $no7_4_2_3;
      $no7_4_2_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>265,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_2_4 = $no7_4_2_4;
      $no7_4_3_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>266,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_3_1 = $no7_4_3_1;
      $no7_4_3_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>267,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_3_2 = $no7_4_3_2;
      $no7_4_3_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>268,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_3_3 = $no7_4_3_3;
      $no7_4_3_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>269,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_3_4 = $no7_4_3_4;
      $no7_4_4_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>270,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_4_1 = $no7_4_4_1;
      $no7_4_4_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>271,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_4_2 = $no7_4_4_2;
      $no7_4_4_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>272,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_4_3 = $no7_4_4_3;
      $no7_4_4_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>273,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_4_4 = $no7_4_4_4;
      $no7_4_5_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>274,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_5_1 = $no7_4_5_1;
      $no7_4_5_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>275,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_5_2 = $no7_4_5_2;
      $no7_4_5_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>276,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_5_3 = $no7_4_5_3;
      $no7_4_5_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>277,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_4_5_4 = $no7_4_5_4;
      $no7_5_1_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>278,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_1_1 = $no7_5_1_1;
      $no7_5_1_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>279,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_1_2 = $no7_5_1_2;
      $no7_5_1_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>280,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_1_3 = $no7_5_1_3;
      $no7_5_1_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>281,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_1_4 = $no7_5_1_4;
      $no7_5_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>282,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_2_1 = $no7_5_2_1;
      $no7_5_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>283,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_2_2 = $no7_5_2_2;
      $no7_5_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>284,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_2_3 = $no7_5_2_3;
      $no7_5_2_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>285,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_2_4 = $no7_5_2_4;
      $no7_5_3_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>286,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_3_1 = $no7_5_3_1;
      $no7_5_3_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>287,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_3_2 = $no7_5_3_2;
      $no7_5_3_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>288,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_3_3 = $no7_5_3_3;
      $no7_5_3_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>289,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_3_4 = $no7_5_3_4;
      $no7_5_4_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>290,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_4_1 = $no7_5_4_1;
      $no7_5_4_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>291,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_4_2 = $no7_5_4_2;
      $no7_5_4_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>292,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_4_3 = $no7_5_4_3;
      $no7_5_4_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>293,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_4_4 = $no7_5_4_4;
      $no7_5_5_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>294,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_5_1 = $no7_5_5_1;
      $no7_5_5_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>295,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_5_2 = $no7_5_5_2;
      $no7_5_5_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>296,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_5_3 = $no7_5_5_3;
      $no7_5_5_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>297,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_5_5_4 = $no7_5_5_4;
      $no7_6_1_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>298,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_1_1 = $no7_6_1_1;
      $no7_6_1_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>299,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_1_2 = $no7_6_1_2;
      $no7_6_1_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>300,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_1_3 = $no7_6_1_3;
      $no7_6_1_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>301,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_1_4 = $no7_6_1_4;
      $no7_6_2_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>302,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_2_1 = $no7_6_2_1;
      $no7_6_2_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>303,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_2_2 = $no7_6_2_2;
      $no7_6_2_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>304,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_2_3 = $no7_6_2_3;
      $no7_6_2_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>305,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_2_4 = $no7_6_2_4;
      $no7_6_3_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>306,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_3_1 = $no7_6_3_1;
      $no7_6_3_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>307,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_3_2 = $no7_6_3_2;
      $no7_6_3_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>308,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_3_3 = $no7_6_3_3;
      $no7_6_3_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>309,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_3_4 = $no7_6_3_4;
      $no7_6_4_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>310,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_4_1 = $no7_6_4_1;
      $no7_6_4_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>311,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_4_2 = $no7_6_4_2;
      $no7_6_4_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>312,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_4_3 = $no7_6_4_3;
      $no7_6_4_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>313,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_4_4 = $no7_6_4_4;
      $no7_6_5_1 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>314,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_5_1 = $no7_6_5_1;
      $no7_6_5_2 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>315,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_5_2 = $no7_6_5_2;
      $no7_6_5_3 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>316,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_5_3 = $no7_6_5_3;
      $no7_6_5_4 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>317,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_6_5_4 = $no7_6_5_4;
      $no7_7 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>318,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_7 = $no7_7;
      $no7_8 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>319,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_8 = $no7_8;
      $no7_9 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>320,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_9 = $no7_9;
      $no7_10 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>321,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_10 = $no7_10;
      $no7_11 = Answer::findFirst(
                      array("questionid=?1 and discovery_surveyid=?2",
                          "bind"=>array(
                              1=>322,
                              2=>$this->discovery_surveyid)))->answer;
      $this->view->no7_11 = $no7_11;
    }
    public function no7Action(){
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
            $this->createViewNo7();
            $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 23 and 25","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
        }
    }
    public function createViewNo8(){
      $no8_1_1_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>323,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_1_1_1 = $no8_1_1_1;

      $no8_1_1_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>324,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_1_1_2 = $no8_1_1_2;

      $no8_1_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>325,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_1_2 = $no8_1_2;

      $no8_1_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>326,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_1_3 = $no8_1_3;

      $no8_1_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>327,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_1_4 = $no8_1_4;

        //no8_2
      $no8_2_1_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>328,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_2_1_1 = $no8_2_1_1;

      $no8_2_1_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>329,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_2_1_2 = $no8_2_1_2;

      $no8_2_1_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>330,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_2_1_3 = $no8_2_1_3;

      $no8_2_2_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>331,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_2_2_1 = $no8_2_2_1;

      $no8_2_2_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>332,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_2_2_2 = $no8_2_2_2;

      $no8_2_2_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>333,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_2_2_3 = $no8_2_2_3;

      $no8_2_3_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>334,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_2_3_1 = $no8_2_3_1;

      $no8_2_3_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>335,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_2_3_2 = $no8_2_3_2;

      $no8_2_3_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>336,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_2_3_3 = $no8_2_3_3;

      $no8_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>337,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4 = $no8_4;

      $no8_4_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>386,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_1 = $no8_4_1;

      $no8_4_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>387,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_2 = $no8_4_2;

      $no8_4_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>388,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_3 = $no8_4_3;

      $no8_4_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>389,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_4 = $no8_4_4;

      $no8_4_5 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>390,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_5 = $no8_4_5;

      $no8_4_6 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>391,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_6 = $no8_4_6;

      $no8_4_7 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>392,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_7 = $no8_4_7;

      $no8_4_8 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>393,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_8 = $no8_4_8;


      $no8_4_9 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>394,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_9 = $no8_4_9;

      $no8_4_10 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>395,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_4_10 = $no8_4_10;

      $no8_5_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>338,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_5_1 = $no8_5_1;

      $no8_5_2_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>339,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_5_2_1 = $no8_5_2_1;

      $no8_5_2_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>340,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_5_2_2 = $no8_5_2_2;

      $no8_5_2_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>341,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_5_2_3 = $no8_5_2_3;

      $no8_5_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>342,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_5_3 = $no8_5_3;

      $no8_5_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>343,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_5_4 = $no8_5_4;

        //no8_6
      $no8_6_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>344,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_6_1 = $no8_6_1;

      $no8_6_2_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>345,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_6_2_1 = $no8_6_2_1;

      $no8_6_2_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>346,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_6_2_2 = $no8_6_2_2;

      $no8_6_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>347,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_6_3 = $no8_6_3;

      $no8_6_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>348,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_6_4 = $no8_6_4;

        //no8_7
      $no8_7_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>349,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_1 = $no8_7_1;

      $no8_7_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>350,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_2 = $no8_7_2;

      $no8_7_3 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>351,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_3 = $no8_7_3;

      $no8_7_4 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>352,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_4 = $no8_7_4;

      $no8_7_5 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>353,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_5 = $no8_7_5;

      $no8_7_6 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>354,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_6 = $no8_7_6;

      $no8_7_7 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>355,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_7 = $no8_7_7;

      $no8_7_8 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>356,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_8 = $no8_7_8;

      $no8_7_9 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>357,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_9 = $no8_7_9;

      $no8_7_10 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>358,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_10 = $no8_7_10;

      $no8_7_11 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>359,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_11 = $no8_7_11;

      $no8_7_12_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>360,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_12_1 = $no8_7_12_1;

      $no8_7_12_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>396,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_12_2 = $no8_7_12_2;

      $no8_7_13_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>361,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_13_1 = $no8_7_13_1;

      $no8_7_13_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>362,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_13_2 = $no8_7_13_2;

      $no8_7_14 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>363,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_14 = $no8_7_14;

      $no8_7_15 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>364,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_15 = $no8_7_15;

      $no8_7_16 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>365,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_16 = $no8_7_16;

      $no8_7_17_1_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>366,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_17_1_1 = $no8_7_17_1_1;

      $no8_7_17_1_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>367,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_17_1_2 = $no8_7_17_1_2;

      $no8_7_17_2_1 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>368,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_17_2_1 = $no8_7_17_2_1;

      $no8_7_17_2_2 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>369,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_17_2_2 = $no8_7_17_2_2;

      $no8_7_18 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>370,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_18 = $no8_7_18;

      $no8_7_19 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>371,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_19 = $no8_7_19;

      $no8_7_20 = Answer::findFirst(
              array("questionid=?1 and discovery_surveyid=?2",
                  "bind"=>array(
                      1=>372,
                      2=>$this->discovery_surveyid)))->answer;
      $this->view->no8_7_20 = $no8_7_20;
    }
    public function no8Action(){
        // no1 JS Assets
        $this->assets->collection('modules-clinic-no8-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no8.js')
            ->setTargetUri('assets/modules-clinic-no8.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no8.js');

        if (!$this->request->isPost()) {
              $this->createViewNo8();
              $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 26 and 31","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
        }elseif ($this->request->isPost()) {
              $this->view->disable();
              $post = $this->request->getPost();
              $option = $this->request->getPost("option");

              $answer = $this->request->getPost("no8_1_1_1");
              $this->updateAnswer($option, 323, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_1_1_2");
              $this->updateAnswer($option, 324, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_1_2");
              $this->updateAnswer($option, 325, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_1_3");
              $this->updateAnswer($option, 326, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_1_4");
              $this->updateAnswer($option, 327, $answer, $user->officeid,  $this->discovery_surveyid);

                //no8_2
              $answer = $this->request->getPost("no8_2_1_1");
              $this->updateAnswer($option, 328, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_2_1_2");
              $this->updateAnswer($option, 329, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_2_1_3");
              $this->updateAnswer($option, 330, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_2_2_1");
              $this->updateAnswer($option, 331, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_2_2_2");
              $this->updateAnswer($option, 332, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_2_2_3");
              $this->updateAnswer($option, 333, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_2_3_1");
              $this->updateAnswer($option, 334, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_2_3_2");
              $this->updateAnswer($option, 335, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_2_3_3");
              $this->updateAnswer($option, 336, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4");
              $this->updateAnswer($option, 337, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_1");
              $this->updateAnswer($option, 386, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_2");
              $this->updateAnswer($option, 387, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_3");
              $this->updateAnswer($option, 388, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_4");
              $this->updateAnswer($option, 389, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_5");
              $this->updateAnswer($option, 390, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_6");
              $this->updateAnswer($option, 391, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_7");
              $this->updateAnswer($option, 392, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_8");
              $this->updateAnswer($option, 393, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_9");
              $this->updateAnswer($option, 394, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_4_10");
              $this->updateAnswer($option, 395, $answer, $user->officeid,  $this->discovery_surveyid);

                //no8_5
              $answer = $this->request->getPost("no8_5_1");
              $this->updateAnswer($option, 338, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_5_2_1");
              $this->updateAnswer($option, 339, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_5_2_2");
              $this->updateAnswer($option, 340, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_5_2_3");
              $this->updateAnswer($option, 341, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_5_3");
              $this->updateAnswer($option, 342, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_5_4");
              $this->updateAnswer($option, 343, $answer, $user->officeid,  $this->discovery_surveyid);

                //8_6
              $answer = $this->request->getPost("no8_6_1");
              $this->updateAnswer($option, 344, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_6_2_1");
              $this->updateAnswer($option, 345, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_6_2_2");
              $this->updateAnswer($option, 346, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_6_3");
              $this->updateAnswer($option, 347, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_6_4");
              $this->updateAnswer($option, 348, $answer, $user->officeid,  $this->discovery_surveyid);

                //no8_7
              $answer = $this->request->getPost("no8_7_1");
              $this->updateAnswer($option, 349, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_2");
              $this->updateAnswer($option, 350, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_3");
              $this->updateAnswer($option, 351, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_4");
              $this->updateAnswer($option, 352, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_5");
              $this->updateAnswer($option, 353, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_6");
              $this->updateAnswer($option, 354, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_7");
              $this->updateAnswer($option, 355, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_8");
              $this->updateAnswer($option, 356, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_9");
              $this->updateAnswer($option, 357, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_10");
              $this->updateAnswer($option, 358, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_11");
              $this->updateAnswer($option, 359, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_12_1");
              $this->updateAnswer($option, 360, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_12_2");
              $this->updateAnswer($option, 396, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_13_1");
              $this->updateAnswer($option, 361, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_13_2");
              $this->updateAnswer($option, 362, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_14");
              $this->updateAnswer($option, 363, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_15");
              $this->updateAnswer($option, 364, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_16");
              $this->updateAnswer($option, 365, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_17_1_1");
              $this->updateAnswer($option, 366, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_17_1_2");
              $this->updateAnswer($option, 367, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_17_2_1");
              $this->updateAnswer($option, 368, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_17_2_2");
              $this->updateAnswer($option, 369, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_18");
              $this->updateAnswer($option, 370, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_19");
              $this->updateAnswer($option, 371, $answer, $user->officeid,  $this->discovery_surveyid);

              $answer = $this->request->getPost("no8_7_20");
              $this->updateAnswer($option, 372, $answer, $user->officeid,  $this->discovery_surveyid);

          }
    }
    public function createViewNo9(){
        $no9_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>373,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_1 = $no9_1;
        $no9_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>374,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_2 = $no9_2;
        $no9_3_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>375,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_3_1 = $no9_3_1;
        $no9_3_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>376,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_3_2 = $no9_3_2;
        $no9_4_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>377,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_4_1 = $no9_4_1;
        $no9_4_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>378,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_4_2 = $no9_4_2;
        $no9_4_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>379,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_4_3 = $no9_4_3;
        $no9_4_4 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>380,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_4_4 = $no9_4_4;
        $no9_4_5 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>381,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_4_5 = $no9_4_5;
        $no9_5_1 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>382,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_5_1 = $no9_5_1;
        $no9_5_2 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>383,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_5_2 = $no9_5_2;
        $no9_5_3 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>384,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_5_3 = $no9_5_3;
        $no9_6 = Answer::findFirst(
                        array("questionid=?1 and discovery_surveyid=?2",
                            "bind"=>array(
                                1=>385,
                                2=>$this->discovery_surveyid)))->answer;
        $this->view->no9_6 = $no9_6;
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
            $this->createViewNo9();
            $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 32 and 36","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
          }
    }

}
