<?php

namespace Message\Controller;

use Application\Mvc\Controller;
use Clinic\Model\Message;
use Clinic\Controller\MessageController;

class IndexController extends MessageController
{

    public function initialize()
    {
        $this->setWebsiteEnvironment();
        $this->view->languages_disabled = true;
        date_default_timezone_set('asia/bangkok');
    }

    public function indexAction()
    {
       // $this->view->disable();
	   //parent::indexAction();
	   //$this->view->aaa = 'aaaa';
    }

    public function sendAction()
    {
        //$this->view->disable();
       //parent::sendAction();
        //$this->view->aaa = 'aaaa';
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
        //die($subject);

        $msg = new Message();

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
        if (!$msg->save()) {
            //die("not save");
            foreach ($msg->getMessages() as $message) {
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
        
      $this->flash->success(sprintf(self::$messageSuccess,"ข้อความส่งสำเร็จ"));

       /*return $this->dispatcher->forward(array(
                    "controller" => "webmessage",
                    "action" => "check"
                ));*/

        
       
    }
}
