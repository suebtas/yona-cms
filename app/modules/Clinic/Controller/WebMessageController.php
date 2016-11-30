<?php

namespace Clinic\Controller;

use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\WebMessage;
use Phalcon\Mvc\Model\Resultset;

class WebMessageController extends ControllerBase
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
        //$this->view->office =  Office::findFirst($this->user->officeid);
    }

    public function indexAction()
    {
        $this->persistent->parameters = null;
        if (!$this->request->isPost())
        {
            return $this->dispatcher->forward(array(
                    "controller" => "webmessage",
                    "action" => "search"
            ));
        }
    }

    public function sendAction()
    {

    }

    public function saveAction()
    {
        //die("AAAA");
        $subject = $this->request->getPost("subject");
        $detail = $this->request->getPost("detail");
        $name = $this->request->getPost("name");
        $email = $this->request->getPost("email");
        $tel = $this->request->getPost("tel");

        //var_dump($listOff);
        //die($allarea);

        $msg = new WebMessage();

        $msg->subject = $subject;
        $msg->detail = $detail;
        $msg->datesent = $this->getTHDate();
        $msg->name = $name;
        $msg->email = $email;
        $msg->tel = $tel;
        $msg->status = 0;

        //
        //var_dump($news);
        //die($this->getTHDate());
        if (!$news->save()) {
            //die("not save");
            foreach ($news->getMessages() as $message) {
                $this->flash->error(sprintf(self::$messageFail,$message));
            }

            /*return $this->dispatcher->forward(array(
                    "controller" => "news",
                    "action" => "index"
                ));*/
        }
        //echo $news->id."\n";


        //die();

        //unset($_POST);
        
      // $this->flash->success(sprintf(self::$messageSuccess,"บันทึกข้อมูลข่าวสารสำเร็จ"));

       /*return $this->dispatcher->forward(array(
                    "controller" => "webmessage",
                    "action" => "check"
                ));*/

        
       
    }

    public function searchAction()
    {
        //die($id);


        $messages = WebMessage::find([
                    "order" => "id DESC"
                ]);

        $this->view->messages = $messages;
    }

    public function readAction($id)
    {
        //die($id);
        $msg = WebMessage::findFirst($id);

        $this->view->subject = $msg->subject;
        $this->view->detail = $msg->detail;
        $this->view->name = $msg->name;
        $this->view->email = $msg->email;
        $this->view->tel = $msg->tel;

        $msg->status = 1;
        $msg->save();
                
        $this->view->userType = $user->role;
    }


}