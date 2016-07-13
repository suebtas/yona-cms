<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Clinic\Model\AdminUser;

class IndexController extends Controller
{

    public function initialize()
    {
    	$this->setClinicEnvironment();
        $this->view->languages_disabled = true;

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
        $auth = $this->session->get('auth');
        $this->view->user = AdminUser::findFirst($auth->id);
    }

    public function indexAction()
    {

        // Dashboard JS Assets
        $this->assets->collection('modules-clinic-dashboard-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-dashboard.js')
            ->setTargetUri('assets/modules-clinic-dashboard.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/dashboard.js');
    }

}
