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
        }else{
            $this->discoverySurvey = DiscoverySurvey::findFirst(array("id=?0","bind"=>array($this->session->get('discovery_surveyid'))));
            $this->session->set('surveyid', $this->discoverySurvey->Survey->id);
            $this->session->set('discovery_surveyid', $this->discoverySurvey->id);
        }
        $this->view->discoverySurvey = $this->discoverySurvey;
        $this->surveyid = $this->session->get('surveyid');
        $this->discovery_surveyid = $this->session->get('discovery_surveyid');
        

        $this->setClinicEnvironment();
        $this->view->languages_disabled = true;
        //$this->surveyid = $this->session->get('surveyid');
        //$this->discovery_surveyid = $this->session->get('discovery_surveyid');
        $this->assets = $this->getDI()->get('assets');
        $this->assets->collection('modules-clinic-css')->setLocal(true)
            ->addFilter(new \Application\Assets\Filter\Less())
            ->setTargetPath(ROOT . '/assets/modules-clinic.css')
            ->setTargetUri('assets/modules-clinic.css')
            ->join(true)
            ->addCss(APPLICATION_PATH . '/modules/Clinic/assets/clinic.css');
            //->addCss(APPLICATION_PATH . '/modules/Clinic/assets/inputs-ext/address/address.css');


        // Clinic JS Assets
        $this->assets->collection('modules-clinic-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic.js')
            ->setTargetUri('assets/modules-clinic.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/clinic.js');
            //->addJs(APPLICATION_PATH . '/modules/Clinic/assets/inputs-ext/address/address.js');


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
        $this->view->office =  $this->discoverySurvey->Office;    
        $this->view->status = $this->discoverySurvey->status;

        $this->view->commenting = $this->getCountComment();

        $this->view->signing_approver = $this->discoverySurvey->signing_approver;
        $this->view->signing_surveyor = $this->discoverySurvey->signing_surveyor;
    }

    public function updateSigningApprover($approver){
        if($surveyor=='delete'){
                //$discoverySurvey = DiscoverySurvey::findFirst(array("id=?0","bind"=>array($this->discovery_surveyid)));
                $this->discoverySurvey->signing_approver = null;//$approver;
                $this->discoverySurvey->save();
                echo 'ok';
                
            }else if($approver != ''){
                //$discoverySurvey = DiscoverySurvey::findFirst(array("id=?0","bind"=>array($this->discovery_surveyid)));
                $this->discoverySurvey->signing_approver = $approver;
                $this->discoverySurvey->save();
                echo 'ok';
            }
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
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no1.js');

        $this->disabledInput(1);

        
        if (!$this->request->isPost()) {
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>1,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_1 = $detail;
            $this->view->status_comment_session_1 = $status;
            unset($comment);
            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>2,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_2 = $detail;
            $this->view->status_comment_session_2 = $status;

            parent::createViewNo1();

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
            $status_comment = $this->request->getPost("status_session_1");
            if($status_comment){
                $this->updateStatusComment($option, 1, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_2");
            if($status_comment){
                $this->updateStatusComment($option, 2, $status_comment, $user->id, $this->discovery_surveyid);
            }

            $post = $this->request->getPost();
            $this->updateReply($option, $post, $this->discovery_surveyid);

            $approve = $this->request->getPost("group_session_1");
            if($approve){
                if($user->role=='cc-admin')
                    $level = 2;
                elseif($user->role=='cc-approver')
                    $level = 1;
                if($level!=null)
                    $this->updateApprove($option, 1, $approve, $level, $user->id, $this->discovery_surveyid);
            }
            
            $approver = $this->request->getPost("signing_approver");
            $this->updateSigningApprover($approver);
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
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no2.js');

        $this->disabledInput(2);
        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>3,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_1 = $detail;
            $this->view->status_comment_session_1 = $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>4,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_2 = $detail;
            $this->view->status_comment_session_2 = $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>5,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_3 = $detail;
            $this->view->status_comment_session_3 = $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>6,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_4 = $detail;
            $this->view->status_comment_session_4 = $status;
            
            parent::createViewNo2();

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

            $status_comment = $this->request->getPost("status_session_1");
            if($status_comment){
                $this->updateStatusComment($option, 3, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_2");
            if($status_comment){
                $this->updateStatusComment($option, 4, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_3");
            if($status_comment){
                $this->updateStatusComment($option, 5, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_4");
            if($status_comment){
                $this->updateStatusComment($option, 6, $status_comment, $user->id, $this->discovery_surveyid);
            }

            $post = $this->request->getPost();
            $this->updateReply($option, $post, $this->discovery_surveyid);

            $approve = $this->request->getPost("group_session_1");
            if($approve){
                if($user->role=='cc-admin')
                    $level = 2;
                elseif($user->role=='cc-approver')
                    $level = 1;
                if($level!=null)
                    $this->updateApprove($option, 1, $approve, $level, $user->id, $this->discovery_surveyid);
            }
            
            $approver = $this->request->getPost("signing_approver");
            $this->updateSigningApprover($approver);
        }

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 3 and 6","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
    }


    public function no3Action(){

        // no3 JS Assets
        $this->assets->collection('modules-clinic-no3-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no3.js')
            ->setTargetUri('assets/modules-clinic-no3.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no3.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no3.js');

        $this->disabledInput(3);
        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>7,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_1 = $detail;
            $this->view->status_comment_session_1= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>8,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_2 = $detail;
            $this->view->status_comment_session_2= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>9,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_3 = $detail;
            $this->view->status_comment_session_3= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>10,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_4 = $detail;
            $this->view->status_comment_session_4= $status;
            
            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>11,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_5 = $detail;
            $this->view->status_comment_session_5= $status;
            parent::createViewNo3();

        }elseif($this->request->isPost()){            
            $this->view->disable();
            $option = $this->request->getPost("option");

            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);
            $comment = $this->request->getPost("session_1");
            if($comment){
                $this->updateComment($option, 7, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_2");
            if($comment){
                $this->updateComment($option, 8, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_3");
            if($comment){
                $this->updateComment($option, 9, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_4");
            if($comment){
                $this->updateComment($option, 10, $comment, $user->id, $this->discovery_surveyid);
            }            
            $comment = $this->request->getPost("session_5");
            if($comment){
                $this->updateComment($option, 11, $comment, $user->id, $this->discovery_surveyid);
            }

            $status_comment = $this->request->getPost("status_session_1");
            if($status_comment){
                $this->updateStatusComment($option, 7, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_2");
            if($status_comment){
                $this->updateStatusComment($option, 8, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_3");
            if($status_comment){
                $this->updateStatusComment($option, 9, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_4");
            if($status_comment){
                $this->updateStatusComment($option, 10, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_5");
            if($status_comment){
                $this->updateStatusComment($option, 11, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $post = $this->request->getPost();
            $this->updateReply($option, $post, $this->discovery_surveyid);
            $approve = $this->request->getPost("group_session_1");
            if($approve){
                if($user->role=='cc-admin')
                    $level = 2;
                elseif($user->role=='cc-approver')
                    $level = 1;
                if($level!=null)
                    $this->updateApprove($option, 1, $approve, $level, $user->id, $this->discovery_surveyid);
            }
            
            $approver = $this->request->getPost("signing_approver");
            $this->updateSigningApprover($approver);
        }

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 7 and 11","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
    }


    public function no4Action(){

        // no3 JS Assets
        $this->assets->collection('modules-clinic-no4-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no4.js')
            ->setTargetUri('assets/modules-clinic-no4.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no4.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no4.js');

        $this->disabledInput(4);
        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>12,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_1 = $detail;
            $this->view->status_comment_session_1= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>13,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_2 = $detail;
            $this->view->status_comment_session_2= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>14,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_3 = $detail;
            $this->view->status_comment_session_3= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>15,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_4 = $detail;
            $this->view->status_comment_session_4= $status;
            
            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>16,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_5 = $detail;
            $this->view->status_comment_session_5= $status;
            parent::createViewNo4();

        }elseif($this->request->isPost()){            
            $this->view->disable();
            $option = $this->request->getPost("option");

            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);
            $comment = $this->request->getPost("session_1");
            if($comment){
                $this->updateComment($option, 12, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_2");
            if($comment){
                $this->updateComment($option, 13, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_3");
            if($comment){
                $this->updateComment($option, 14, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_4");
            if($comment){
                $this->updateComment($option, 15, $comment, $user->id, $this->discovery_surveyid);
            }            
            $comment = $this->request->getPost("session_5");
            if($comment){
                $this->updateComment($option, 16, $comment, $user->id, $this->discovery_surveyid);
            }

            $status_comment = $this->request->getPost("status_session_1");
            if($status_comment){
                $this->updateStatusComment($option, 12, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_2");
            if($status_comment){
                $this->updateStatusComment($option, 13, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_3");
            if($status_comment){
                $this->updateStatusComment($option, 14, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_4");
            if($status_comment){
                $this->updateStatusComment($option, 15, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_5");
            if($status_comment){
                $this->updateStatusComment($option, 16, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $post = $this->request->getPost();
            $this->updateReply($option, $post, $this->discovery_surveyid);
            $approve = $this->request->getPost("group_session_1");
            if($approve){
                if($user->role=='cc-admin')
                    $level = 2;
                elseif($user->role=='cc-approver')
                    $level = 1;
                if($level!=null)
                    $this->updateApprove($option, 1, $approve, $level, $user->id, $this->discovery_surveyid);
            }
            
            $approver = $this->request->getPost("signing_approver");
            $this->updateSigningApprover($approver);
        }

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 12 and 16","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
    }


    public function no5Action(){

        // no3 JS Assets
        $this->assets->collection('modules-clinic-no5-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no5.js')
            ->setTargetUri('assets/modules-clinic-no5.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no5.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no5.js');

        $this->disabledInput(5);
        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>17,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_1 = $detail;
            $this->view->status_comment_session_1= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>18,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_2 = $detail;
            $this->view->status_comment_session_2= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>19,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_3 = $detail;
            $this->view->status_comment_session_3= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>20,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_4 = $detail;
            $this->view->status_comment_session_4= $status;
            
            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>21,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_5 = $detail;
            $this->view->status_comment_session_5= $status;
            parent::createViewNo5();

        }elseif($this->request->isPost()){            
            $this->view->disable();
            $option = $this->request->getPost("option");

            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);
            $comment = $this->request->getPost("session_1");
            if($comment){
                $this->updateComment($option, 17, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_2");
            if($comment){
                $this->updateComment($option, 18, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_3");
            if($comment){
                $this->updateComment($option, 19, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_4");
            if($comment){
                $this->updateComment($option, 20, $comment, $user->id, $this->discovery_surveyid);
            }            
            $comment = $this->request->getPost("session_5");
            if($comment){
                $this->updateComment($option, 21, $comment, $user->id, $this->discovery_surveyid);
            }

            $status_comment = $this->request->getPost("status_session_1");
            if($status_comment){
                $this->updateStatusComment($option, 17, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_2");
            if($status_comment){
                $this->updateStatusComment($option, 18, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_3");
            if($status_comment){
                $this->updateStatusComment($option, 19, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_4");
            if($status_comment){
                $this->updateStatusComment($option, 20, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_5");
            if($status_comment){
                $this->updateStatusComment($option, 21, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $post = $this->request->getPost();
            $this->updateReply($option, $post, $this->discovery_surveyid);
            $approve = $this->request->getPost("group_session_1");
            if($approve){
                if($user->role=='cc-admin')
                    $level = 2;
                elseif($user->role=='cc-approver')
                    $level = 1;
                if($level!=null)
                    $this->updateApprove($option, 1, $approve, $level, $user->id, $this->discovery_surveyid);
            }
            
            $approver = $this->request->getPost("signing_approver");
            $this->updateSigningApprover($approver);
        }

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 17 and 21","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
    }


    public function no6Action(){

        // no3 JS Assets
        $this->assets->collection('modules-clinic-no6-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no6.js')
            ->setTargetUri('assets/modules-clinic-no6.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no6.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no6.js');

        $this->disabledInput(6);
        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>22,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_1 = $detail;
            $this->view->status_comment_session_1= $status;

            parent::createViewNo6();

        }elseif($this->request->isPost()){            
            $this->view->disable();
            $option = $this->request->getPost("option");

            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);
            $comment = $this->request->getPost("session_1");
            if($comment){
                $this->updateComment($option, 22, $comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_1");
            if($status_comment){
                $this->updateStatusComment($option, 22, $status_comment, $user->id, $this->discovery_surveyid);
            }

            $post = $this->request->getPost();
            $this->updateReply($option, $post, $this->discovery_surveyid);
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

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid = 22","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
    }


    public function no7Action(){

        // no3 JS Assets
        $this->assets->collection('modules-clinic-no7-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no7.js')
            ->setTargetUri('assets/modules-clinic-no7.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no7.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no7.js');

        $this->disabledInput(7);
        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>23,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_1 = $detail;
            $this->view->status_comment_session_1= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>24,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_2 = $detail;
            $this->view->status_comment_session_2= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>25,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_3 = $detail;
            $this->view->status_comment_session_3= $status;

            parent::createViewNo7();

        }elseif($this->request->isPost()){            
            $this->view->disable();
            $option = $this->request->getPost("option");

            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);
            $comment = $this->request->getPost("session_1");
            if($comment){
                $this->updateComment($option, 23, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_2");
            if($comment){
                $this->updateComment($option, 24, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_3");
            if($comment){
                $this->updateComment($option, 25, $comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_1");
            if($status_comment){
                $this->updateStatusComment($option, 23, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_2");
            if($status_comment){
                $this->updateStatusComment($option, 24, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_3");
            if($status_comment){
                $this->updateStatusComment($option, 25, $status_comment, $user->id, $this->discovery_surveyid);
            }

            $post = $this->request->getPost();
            $this->updateReply($option, $post, $this->discovery_surveyid);
            $approve = $this->request->getPost("group_session_1");
            if($approve){
                if($user->role=='cc-admin')
                    $level = 2;
                elseif($user->role=='cc-approver')
                    $level = 1;
                if($level!=null)
                    $this->updateApprove($option, 1, $approve, $level, $user->id, $this->discovery_surveyid);
            }
            
            $approver = $this->request->getPost("signing_approver");
            $this->updateSigningApprover($approver);
        }

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 23 and 25","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
    }

    public function no8Action(){

        // no3 JS Assets
        $this->assets->collection('modules-clinic-no8-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no8.js')
            ->setTargetUri('assets/modules-clinic-no8.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no8.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no8.js');

        $this->disabledInput(8);
        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>26,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_1 = $detail;
            $this->view->status_comment_session_1= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>27,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_2 = $detail;
            $this->view->status_comment_session_2= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>28,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_3 = $detail;
            $this->view->status_comment_session_3= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>29,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_4 = $detail;
            $this->view->status_comment_session_4= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>30,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_5 = $detail;
            $this->view->status_comment_session_5= $status;

            parent::createViewNo8();

        }elseif($this->request->isPost()){            
            $this->view->disable();
            $option = $this->request->getPost("option");

            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);
            $comment = $this->request->getPost("session_1");
            if($comment){
                $this->updateComment($option, 26, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_2");
            if($comment){
                $this->updateComment($option, 27, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_3");
            if($comment){
                $this->updateComment($option, 28, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_4");
            if($comment){
                $this->updateComment($option, 29, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_5");
            if($comment){
                $this->updateComment($option, 30, $comment, $user->id, $this->discovery_surveyid);
            }

            $status_comment = $this->request->getPost("status_session_1");
            if($status_comment){
                $this->updateStatusComment($option, 26, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_2");
            if($status_comment){
                $this->updateStatusComment($option, 27, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_3");
            if($status_comment){
                $this->updateStatusComment($option, 28, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_4");
            if($status_comment){
                $this->updateStatusComment($option, 29, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_5");
            if($status_comment){
                $this->updateStatusComment($option, 30, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $post = $this->request->getPost();
            $this->updateReply($option, $post, $this->discovery_surveyid);
            $approve = $this->request->getPost("group_session_1");
            if($approve){
                if($user->role=='cc-admin')
                    $level = 2;
                elseif($user->role=='cc-approver')
                    $level = 1;
                if($level!=null)
                    $this->updateApprove($option, 1, $approve, $level, $user->id, $this->discovery_surveyid);
            }
            
            $approver = $this->request->getPost("signing_approver");
            $this->updateSigningApprover($approver);
        }

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 26 and 31","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
    }


    public function no9Action(){

        // no3 JS Assets
        $this->assets->collection('modules-clinic-no9-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no9.js')
            ->setTargetUri('assets/modules-clinic-no9.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no9.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/app.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/review-no9.js');

        $this->disabledInput(9);
        if (!$this->request->isPost()) {
            $form = new No1Form();
            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>32,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_1 = $detail;
            $this->view->status_comment_session_1= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>33,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_2 = $detail;
            $this->view->status_comment_session_2= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>34,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_3 = $detail;
            $this->view->status_comment_session_3= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>35,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_4 = $detail;
            $this->view->status_comment_session_4= $status;

            $comment = Comment::findFirst(
                            array("sessionid=?1 and discovery_surveyid=?2 and admin_userid=?3",
                                "bind"=>array(
                                    1=>36,
                                    2=>$this->discovery_surveyid,
                                    3=>$user->id)));
            if(!$comment){
              $detail = null;              
              $status = null;
            }
            else{
              $detail = $comment->description;
              $status = $comment->status;
            }
            $this->view->comment_session_5 = $detail;
            $this->view->status_comment_session_5= $status;

            parent::createViewNo9();

        }elseif($this->request->isPost()){            
            $this->view->disable();
            $option = $this->request->getPost("option");

            $auth = $this->session->get('auth');
            $user = AdminUser::findFirst($auth->id);
            $comment = $this->request->getPost("session_1");
            if($comment){
                $this->updateComment($option, 32, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_2");
            if($comment){
                $this->updateComment($option, 33, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_3");
            if($comment){
                $this->updateComment($option, 34, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_4");
            if($comment){
                $this->updateComment($option, 35, $comment, $user->id, $this->discovery_surveyid);
            }
            $comment = $this->request->getPost("session_5");
            if($comment){
                $this->updateComment($option, 36, $comment, $user->id, $this->discovery_surveyid);
            }

            $status_comment = $this->request->getPost("status_session_1");
            if($status_comment){
                $this->updateStatusComment($option, 32, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_2");
            if($status_comment){
                $this->updateStatusComment($option, 33, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_3");
            if($status_comment){
                $this->updateStatusComment($option, 34, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_4");
            if($status_comment){
                $this->updateStatusComment($option, 35, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $status_comment = $this->request->getPost("status_session_5");
            if($status_comment){
                $this->updateStatusComment($option, 36, $status_comment, $user->id, $this->discovery_surveyid);
            }
            $post = $this->request->getPost();
            $this->updateReply($option, $post, $this->discovery_surveyid);
            $approve = $this->request->getPost("group_session_1");
            if($approve){
                if($user->role=='cc-admin')
                    $level = 2;
                elseif($user->role=='cc-approver')
                    $level = 1;
                if($level!=null)
                    $this->updateApprove($option, 1, $approve, $level, $user->id, $this->discovery_surveyid);
            }
            
            $approver = $this->request->getPost("signing_approver");
            $this->updateSigningApprover($approver);
        }

        $this->view->comments = Comment::find(array("discovery_surveyid=?0 and sessionid between 32 and 36","bind"=>array($this->discovery_surveyid),"order"=>"sessionid"));
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
              else{
                  if($approve==2){ //2 ไม่ผ่าน
                        $this->discoverySurvey->status = 1; //0=>'อยู่ระหว่างสำรวจ',1=>'พิจารณาปรับแก้ข้อมูล',2=>'แจ้งให้หัวหน้ายืนยัน',3=>'สำรวจสำเร็จ'
                        if($level == 2){
                            $approvalApprover = $this->discoverySurvey->getApprovals(array("conditions"=>"level=1"))->getFirst();
                            $approvalApprover->status = 1;
                            $approvalApprover->save();
                        }
                  }else if($approve==3){ //ผ่าน
                        if($level == 1)
                            $this->discoverySurvey->status = 2; 
                        elseif($level==2)
                            $this->discoverySurvey->status = 3; //0=>'อยู่ระหว่างสำรวจ',1=>'พิจารณาปรับแก้ข้อมูล',2=>'แจ้งให้หัวหน้ายืนยัน',3=>'สำรวจสำเร็จ'                        
                  }
                  $this->discoverySurvey->save();
                  echo 'ok';              
              }
          }elseif($comment=='delete' && $option=='delete'){
              $modelT = Approval::findFirst(
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
    
    public function updateStatusComment($option, $sessionid, $status, $admin_userid, $discovery_surveyid){
        if($status!=""){
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
              $modelT->status = $status;
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

    public function updateReply($option, $post, $discovery_surveyid){

        foreach($post as $key => $value ){
            if(substr($key, 0, 5)=="reply"){
                $commentID = substr($key,6,strlen($key)-6);
                if($value!=""){
                    if($option=='add'){
                        $modelT = Comment::findFirst(
                            array("id=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>$commentID,
                                    2=>$discovery_surveyid)));

                        $modelT->reply = $value;
                        if($modelT->save()==false)
                            echo 'error';
                        else
                            echo 'ok';
                    }elseif($value=='delete' && $option=='delete'){
                        $modelT = Comment::findFirst(
                            array("id=?1 and discovery_surveyid=?2",
                                "bind"=>array(
                                    1=>$commentID,
                                    2=>$discovery_surveyid)));
                        $modelT->reply = null;
                        $modelT->save();
                        echo 'delete';

                    }
                }
            }
        }      
    }
}