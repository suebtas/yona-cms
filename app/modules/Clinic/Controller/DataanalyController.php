<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Session;
use Clinic\Model\Question;
use Clinic\Model\Survey;
use Clinic\Model\Office;
use Phalcon\Mvc\Model\Resultset;

class DataanalyController extends FormController
{

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


        $this->view->sessiones = Session::find([
            "order" => "id ASC"
        ]);

        if($this->request->isPost())
        {
            //die();
            $session = $this->request->getPost("Sessiones");
            $this->view->questions = Question::find("sessionid = {$session}");
            $this->view->questid = $session;

            $years = $this->request->getPost("Years");

            if($years != "")
            {
                $tmpyear = explode("/", $years);
                $year1 = $tmpyear[1];
                $year2 = $tmpyear[1]-1;

            }
            else
            {
                $year1 = "XXXX";
                $year2 = "YYYY";
                $years = 0;
            }
            

            $this->view->year1 = $year1;
            $this->view->year2 = $year2;
            $this->view->year = $years;

        }
        else
        {
            $this->view->questions = Question::find("sessionid = 1");
            $this->tag->setDefault("Questions", 1);

            $this->view->year1 = "XXXX";
            $this->view->year2 = "YYYY";
            $this->view->year = 0;
        }
       
        //Question::find(["order" => "id ASC"  ]);

        $this->view->years = Survey::find([
            "order" => "id DESC"
        ]);

        //var_dump($this->view->entries);
        //die();
    }

    public function queryAction()
    {

    }
}