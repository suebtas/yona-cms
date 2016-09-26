<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Clinic\Model\BoundaryOffice;
use Clinic\Model\DiscoverySurvey;
use Clinic\Model\Comment;
use Clinic\Model\Approval;
use Clinic\Model\Answer;
use Phalcon\Mvc\Model\Resultset;
use Clinic\Form\Question\No1Form;

class ReviewController extends FormController
{

    public function initialize()
    {
        /*
        if(!$this->session->has('surveyid')){
            $this->session->set('surveyid', 1);
            $this->session->set('discovery_surveyid', 1);
        }*/

        $auth = $this->session->get('auth');
        $this->user = AdminUser::findFirst($auth->id);

        if(!$this->session->has('discovery_surveyid')){
            $this->discoverySurvey = DiscoverySurvey::findFirst(array("officeid=?0","bind"=>$this->user->officeid));
            if($this->discoverySurvey==null){
                echo 'error';             
            }
            $this->session->set('surveyid', $this->discoverySurvey->Survey->id);
            $this->session->set('discovery_surveyid', $this->discoverySurvey->id);
        }
        $this->surveyid = $this->session->get('surveyid');
        $this->discovery_surveyid = $this->session->get('discovery_surveyid');
        

        $this->setClinicEnvironment();
        $this->view->languages_disabled = true;
        //$this->surveyid = $this->session->get('surveyid');
        //$this->discovery_surveyid = $this->session->get('discovery_surveyid');
        $this->discoverySurvey = DiscoverySurvey::findFirst($this->discovery_surveyid);
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
        //กำหนดค่าใน view
        $this->view->user = $this->user;
        $this->view->office =  Office::findFirst($this->discoverySurvey->officeid);    
        $this->view->status = $this->discoverySurvey->status;
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
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no1.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js');

        if (!$this->request->isPost()) {
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>1,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment)
              $detail = null;
            else
              $detail = $comment->description;
              $this->view->comment_session_1 = $detail;
            unset($comment);
            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>2,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment)
              $detail = null;
            else
              $detail = $comment->description;
              $this->view->comment_session_2 = $detail;

            parent::createViewNo1();

        }elseif($this->request->isPost())
        {            
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

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 1 and 2","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
    }

    public function no2Action(){

        // no1 JS Assets
        $this->assets->collection('modules-clinic-no2-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no2.js')
            ->setTargetUri('assets/modules-clinic-no2.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no2.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no2.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js');

        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment_session_1 = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>3,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)))->description;
            $this->view->comment_session_1 = $comment_session_1;

            $comment_session_2 = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>4,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)))->description;
            $this->view->comment_session_2 = $comment_session_2;

            $comment_session_3 = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>5,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)))->description;
            $this->view->comment_session_3 = $comment_session_3;

            $comment_session_4 = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>6,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)))->description;
            $this->view->comment_session_4 = $comment_session_4;
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

        }elseif($this->request->isPost()){            
            $this->view->disable();
            $option = $this->request->getPost("option");

            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);
            $comment = $this->request->getPost("session_1");
            if($comment){
                $this->updateComment($option, 3, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_2");
            if($comment){
                $this->updateComment($option, 4, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_3");
            if($comment){
                $this->updateComment($option, 5, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_4");
            if($comment){
                $this->updateComment($option, 6, $comment, $user->id, $this->discovery_surveyid);
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

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 3 and 6","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
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