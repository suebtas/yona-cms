<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\News;
use Clinic\Model\NewsDetail;
use Clinic\Model\NewsType;
use Clinic\Model\NewsLevel;
use Clinic\Model\NewsImportant;
use Clinic\Model\Office;
use Phalcon\Mvc\Model\Resultset;

class NewsController extends FormController
{
    public function getTHDate(){

        $DT = date('Y-m-d [H:i:s]');
        
        $DT2 = explode(" ", $DT);        
        $date = explode("-", $DT2[0]);
        $date[0] = $date[0]+543;
        $dateshow = "{$date[2]}/{$date[1]}/{$date[0]} เวลา {$DT2[1]}";
        
        //die($dateshow);
        return $dateshow;
    }

    public function initialize()
    {
        date_default_timezone_set('asia/bangkok');

        $auth = $this->session->get('auth');
        $this->user = AdminUser::findFirst($auth->id);

        $this->setClinicEnvironment();
        $this->assets = $this->getDI()->get('assets');
        $this->assets->collection('modules-clinic-css')->setLocal(true)
            ->addFilter(new \Application\Assets\Filter\Less())
            ->setTargetPath(ROOT . '/assets/modules-clinic.css')
            ->setTargetUri('assets/modules-clinic.css')
            ->join(true)
            ->addCss(APPLICATION_PATH . '/modules/Clinic/assets/clinic.css');
        //$this->setAdminEnvironment();
        $this->view->languages_disabled = true;

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
    }

    public function indexAction()
    {
        $listoffices = Office::find();
        $this->view->listoffices = $listoffices;

        $newstype = NewsType::find();
        $this->view->newstype = $newstype;
        $this->tag->setDefault("NewsType", 1);


        $newslevel = NewsLevel::find();
        $this->view->newslevel = $newslevel;
        $this->tag->setDefault("NewsLevel", 1);

        $newsimportant = NewsImportant::find();
        $this->view->newsimportant = $newsimportant;
        $this->tag->setDefault("NewsImportant", 1);
    }

    public function addAction()
    {
        //die("AAAA");
        $type = $this->request->getPost("NewsType");
        $level = $this->request->getPost("NewsLevel");
        $important = $this->request->getPost("NewsImportant");
        $subject = $this->request->getPost("subject");
        $detail = $this->request->getPost("detail");
        //$today = date('Y-m-d-H-i-s'); //this returns the current date time
        //$today = $date->format('Y-m-d-H-i-s');

        //die($today);
        $allarea = $this->request->getPost("allarea");
        $listOff = $this->request->getPost("ListOffice");
        //var_dump($listOff);
        //die($allarea);

        $news = new News();

        $news->subject = $subject;
        $news->detail = $detail;
        $news->datesent = $this->getTHDate();
        $news->newstype = $type;
        $news->newslevel = $level;
        $news->newsimportant = $important;
        $news->status = 1;
        $auth = $this->session->get('auth');
        $news->adminid = $auth->id;
        //
        //var_dump($news);
        //die($this->getTHDate());
        if (!$news->save()) {
            die("not save");
            foreach ($news->getMessages() as $message) {
                $this->flash->error(sprintf(self::$messageFail,$message));
            }

            return $this->dispatcher->forward(array(
                    "controller" => "news",
                    "action" => "index"
                ));
        }
        //echo $news->id."\n";

        if($allarea == "0")
        {
            $listuser = AdminUser::find("active=1");
            foreach ($listuser as $user) 
            {
                $level = 0;
                if($user->role == "cc-user")
                {
                    $level = 1;
                }
                elseif($user->role == "cc-approver")
                {
                    $level = 2;
                }

                if($level == 1 || $level == 2)
                {
                    $newsdetail = new NewsDetail();

                    $newsdetail->newsid = $news->id;
                    $newsdetail->userid = $user->id;
                    $newsdetail->level = $level;
                    $newsdetail->status = 0;

                    if (!$newsdetail->save()) {
                        die("not save");
                        foreach ($newsdetail->getMessages() as $message) {
                            $this->flash->error(sprintf(self::$messageFail,$message));
                        }

                        return $this->dispatcher->forward(array(
                                "controller" => "news",
                                "action" => "index"
                            ));
                    }
                }
            }
        }
        else
        {
            foreach ($listOff as $off) 
            {
                $listuser = AdminUser::find("active = 1 AND officeid = {$off}");
                if($listuser != null)
                {
                    foreach ($listuser as $user) 
                    {
                        $level = 0;
                        if($user->role == "cc-user")
                        {
                            $level = 1;
                        }
                        elseif($user->role == "cc-approver")
                        {
                            $level = 2;
                        }

                        if($level == 1 || $level == 2)
                        {
                            $newsdetail = new NewsDetail();

                            $newsdetail->newsid = $news->id;
                            $newsdetail->userid = $user->id;
                            $newsdetail->level = $level;
                            $newsdetail->status = 0;

                            if (!$newsdetail->save()) {
                                die("not save");
                                foreach ($newsdetail->getMessages() as $message) {
                                    $this->flash->error(sprintf(self::$messageFail,$message));
                                }

                                return $this->dispatcher->forward(array(
                                        "controller" => "news",
                                        "action" => "index"
                                    ));
                            }
                        }
                    }
                }
                
            }
        }

        //die();

        //unset($_POST);
        
      // $this->flash->success(sprintf(self::$messageSuccess,"บันทึกข้อมูลข่าวสารสำเร็จ"));

       return $this->dispatcher->forward(array(
                    "controller" => "news",
                    "action" => "check"
                ));

        
       
    }

    public function checkAction()
    {
        //$this->initialize()
        $auth = $this->session->get('auth');
        $user = AdminUser::findFirst($auth->id);
        //var_dump($user);
        //die($user->id);
        if($user->role == "cc-admin")
        {
            $news = News::find([
                    "order" => "id DESC"
                ]);

            $this->view->news = $news;
            $this->view->userType = "cc-admin";
        }
        elseif($user->role == "cc-user" OR $user->role == "cc-approver")
        {
            $usernews = NewsDetail::find("userid = {$auth->id}");
        
            if(count($usernews) >0)
            {
                foreach($usernews as $news)
                {
                    $IDs[] = $news->newsid;
                }       
                $NewsIDs = implode(",",$IDs);
            
                $news = News::find("status = 1 AND id in ($NewsIDs) order by id DESC");
            }
            $this->view->news = $news;
            $this->view->userid = "$auth->id";

            /*$userread = News::find("status = 1");
            //die(count($userread));
            if(count($userread) >0)
            {
                foreach($userread as $news)
                {
                    //if($news->status == 1)
                        $readIDs[] = $news->id;
                }       
                $readNewsIDs = implode(",",$readIDs);
                //var_dump($NewsIDs);
                //die();
                $unread = NewsDetail::find("userid = {$auth->id} AND status = 0 AND newsid in ($readNewsIDs)");
            }

            $this->view->unread = count($unread);*/

            $this->view->unread = $user->getUnreadNews();
        }
        //$news = News::find("status=1 order by id DESC");

        //$this->view->news = $news;


    }
    public function checklistAction($id)
    {
        $auth = $this->session->get('auth');
        $newsAppr = NewsDetail::find("newsid = {$id} AND level = 2 order by status DESC");

        $newsUser = NewsDetail::find("newsid = {$id} AND level = 1 order by status DESC");

        $this->view->newsUser = $newsUser;
        $this->view->newsAppr = $newsAppr;
        //die($id);
    }

    public function readAction($id)
    {
        //die($id);
        $auth = $this->session->get('auth');

        $news = News::findFirst($id);
        $user = AdminUser::findFirst($auth->id);
        if($user->role == "cc-user" OR $user->role == "cc-approver")
        {
            $readNews = NewsDetail::findFirst("newsid = {$id} AND userid = {$auth->id}");

            //die($readNews->status);
            $readNews->status = 1;
            $readNews->save();
        }
        
        $this->view->newsid = $news->id;
        $this->view->subject = $news->subject;
        $this->view->detail = $news->detail;

        $newstype = NewsType::findFirst($news->newstype);
        $this->view->newstype = $newstype->name;

        $newslevel = NewsLevel::findFirst($news->newslevel);
        $this->view->newslevel = $newslevel->name;

        $newsimportant = NewsType::findFirst($news->newsimportant);
        $this->view->newsimportant = $newsimportant->name;

         $this->view->userType = $user->role;
    }

    public function editAction($id)
    {
        $news = News::findFirst($id);

        $this->view->subject = $news->subject;
        $this->view->detail = $news->detail;

        $newstype = NewsType::find();
        $this->view->newstype = $newstype;
        $this->tag->setDefault("NewsType", $news->newstype);

        $newslevel = NewsLevel::find();
        $this->view->newslevel = $newslevel;
        $this->tag->setDefault("NewsLevel", $news->newslevel);

        $newsimportant = NewsImportant::find();
        $this->view->newsimportant = $newsimportant;
        $this->tag->setDefault("NewsImportant", $news->newsimportant);

        $this->view->newsid = $id;
    }

    public function saveAction($id)
    {
        $type = $this->request->getPost("NewsType");
        $level = $this->request->getPost("NewsLevel");
        $important = $this->request->getPost("NewsImportant");
        $subject = $this->request->getPost("subject");
        $detail = $this->request->getPost("detail");
        //$today = date('Y-m-d-H-i-s'); //this returns the current date time
        //$today = $date->format('Y-m-d-H-i-s');

        //die($today);

        $news = News::findFirst($id);

        $news->subject = $subject;
        $news->detail = $detail;
        //$news->datesent = $this->getTHDate();
        $news->newstype = $type;
        $news->newslevel = $level;
        $news->newsimportant = $important;
        $news->status = 1;
        $auth = $this->session->get('auth');
        $news->adminid = $auth->id;
        //
        //var_dump($news);
        //die($this->getTHDate());
        if (!$news->save()) {
            die("not save");
            foreach ($news->getMessages() as $message) {
                $this->flash->error(sprintf(self::$messageFail,$message));
            }

            return $this->dispatcher->forward(array(
                    "controller" => "news",
                    "action" => "index"
                ));
        }

        $this->flash->success(sprintf(self::$messageSuccess,"แก้ไข้อมูลข่าวสารสำเร็จ"));

        return $this->dispatcher->forward(array(
                    "controller" => "news",
                    "action" => "check"
                ));
    }

    public function cancelAction($id)
    {
        $news = News::findFirst($id);

        $news->status = 0;
        $news->save();

        return $this->dispatcher->forward(array(
                    "controller" => "news",
                    "action" => "check"
                ));
    }

    public function activeAction($id)
    {
        $news = News::findFirst($id);

        $news->status = 1;
        $news->save();

         return $this->dispatcher->forward(array(
                    "controller" => "news",
                    "action" => "check"
                ));
    }

    /*public function deleteAction($id)
    {
        $model = AdminUser::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'admin/admin-user');
        }

        if ($model->getLogin() == 'admin') {
            $this->flash->error('Admin user cannot be deleted');
            return $this->redirect($this->url->get() . 'admin/admin-user');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting user <b>' . $model->getLogin() . '</b>');
            return $this->redirect($this->url->get() . 'admin/admin-user');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete User'), true);
    }*/
}