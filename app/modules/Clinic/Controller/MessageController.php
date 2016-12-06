<?php

namespace Clinic\Controller;

use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Message;
use Phalcon\Mvc\Model\Resultset;

class MessageController extends ControllerBase
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
                    "controller" => "message",
                    "action" => "search"
            ));
        }
    }

    

    public function searchAction()
    {
        //die($id);


        $messages = Message::find([
                    "order" => "id DESC"
                ]);

        $this->view->messages = $messages;
    }

    public function readAction($id)
    {
        //die($id);
        $msg = Message::findFirst($id);

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