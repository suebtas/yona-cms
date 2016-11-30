<?php

namespace WebMessage\Controller;

use Application\Mvc\Controller;
use Clinic\Controller\WebMessageController;

class IndexController extends WebMessageController
{

    public function initialize()
    {
        $this->setWebsiteEnvironment();
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
       // $this->view->disable();
	   parent::indexAction();
	   //$this->view->aaa = 'aaaa';
    }

    public function sendAction()
    {
        //$this->view->disable();
       parent::sendAction();
        //$this->view->aaa = 'aaaa';
    }
}
