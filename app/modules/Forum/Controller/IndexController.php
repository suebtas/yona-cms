<?php

namespace Forum\Controller;

use Application\Mvc\Controller;
use Clinic\Controller\ForumController;

class IndexController extends ForumController
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

    public function searchAction()
    {
        //$this->view->disable();
       parent::searchAction();
        //$this->view->aaa = 'aaaa';
    }
}
