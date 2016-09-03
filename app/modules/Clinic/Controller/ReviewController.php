<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Clinic\Model\BoundaryOffice;
use Clinic\Model\DiscoverSurvey;
use Clinic\Model\Comment;
use Clinic\Model\Approval;
use Clinic\Model\Answer;
use Phalcon\Mvc\Model\Resultset;
use Clinic\Form\Question\No1Form;

class ReviewController extends Controller
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


        // Clinic JS Assets
        $this->assets->collection('modules-clinic-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-app.js')
            ->setTargetUri('assets/modules-clinic-app.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js');
        $auth = $this->session->get('auth');
        $this->user = AdminUser::findFirst($auth->id);
        $this->view->user = $this->user;
        $this->view->office =  Office::findFirst($this->user->officeid);
    }
    public function no1Action(){

        // no1 JS Assets
        $this->assets->collection('modules-clinic-no1-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no1.js')
            ->setTargetUri('assets/modules-clinic-no1.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no1.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no1.js');

        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment_session_1 = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>1,
                                    2=>$this->surveyid,
                                    3=>$user->id)))->description;
            $this->view->comment_session_1 = $comment_session_1;

            $comment_session_2 = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>2,
                                    2=>$this->surveyid,
                                    3=>$user->id)))->description;
            $this->view->comment_session_2 = $comment_session_2;

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

        }elseif($this->request->isPost()){            
            $this->view->disable();
            $option = $this->request->getPost("option");

            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);
            $comment = $this->request->getPost("session_1");
            if($comment){
                $this->updateComment($option, 1, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_2");
            if($comment){
                $this->updateComment($option, 2, $comment, $user->id, $this->discovery_surveyid);
            }

            $approve = $this->request->getPost("group_session_1");
            if($approve){
                if($user->role=='cc-admin')
                    $level = 2;
                elseif($user->role=='cc-approver')
                    $level = 1;
                if($level!=null)
                    $this->updateApprove($option, 1, $approve, $level, $user->id, $this->discovery_surveyid);
            }
            
        }

        $this->view->comments = Comment::find(array("discovery_surveyid=?0","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
    }

    public function updateApprove($option, $sessionid, $approve,$level, $admin_userid, $discovery_surveyid){
      if($approve!=""){
          if($option=='add'){
              $modelT = Approval::findFirst(
                  array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                      "bind"=>array(
                          1=>$sessionid,
                          2=>$discovery_surveyid,
                          3=>$admin_userid)));
              if(!$modelT)
                  $modelT = new Approval();

              $modelT->admin_userid = $admin_userid;
              $modelT->discovery_surveyid = $discovery_surveyid;
              $modelT->sessionid = $sessionid;
              $modelT->status = $approve;
              $modelT->order += 1;
              $modelT->level = $level;
              $date = new \DateTime('NOW');
              $modelT->approve_date = $date->format('Y-m-d');
              if($modelT->save()==false)
                  echo 'error';
              else
                  echo 'ok';
          }elseif($comment=='delete' && $option=='delete'){
              $modelT = Comment::findFirst(
                  array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                      "bind"=>array(
                          1=>$sessionid,
                          2=>$discovery_surveyid,
                          3=>$admin_userid)));
              $modelT->delete();
              echo 'delete';

          }
      }
    }
    public function updateComment($option, $sessionid, $comment, $admin_userid, $discovery_surveyid){
      if($comment!=""){
          if($option=='add'){
              $modelT = Comment::findFirst(
                  array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                      "bind"=>array(
                          1=>$sessionid,
                          2=>$discovery_surveyid,
                          3=>$admin_userid)));
              if(!$modelT)
                  $modelT = new Comment();

              $modelT->admin_userid = $admin_userid;
              $modelT->discovery_surveyid = $discovery_surveyid;
              $modelT->sessionid = $sessionid;
              $modelT->description = $comment;
              if($modelT->save()==false)
                  echo 'error';
              else
                  echo 'ok';
          }elseif($comment=='delete' && $option=='delete'){
              $modelT = Comment::findFirst(
                  array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                      "bind"=>array(
                          1=>$sessionid,
                          2=>$discovery_surveyid,
                          3=>$admin_userid)));
              $modelT->delete();
              echo 'delete';

          }
      }
    }
}