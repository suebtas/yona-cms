<?php
namespace Clinic\Controller;

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Clinic\Model\Forum;
use Phalcon\Mvc\Model\Resultset;

class ForumController extends ControllerBase
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
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
        if (!$this->request->isPost())
        {
            return $this->dispatcher->forward(array(
                    "controller" => "forum",
                    "action" => "search"
            ));
        }
    }


    /**
     * Searches for forum
     */
    public function searchAction()
    {
        /*$privilege = (new SessionController())->getActivePrivilege();
        if($privilege != null){
            $_POST['OwnerID'] = $privilege->OwnerID;
        }*/
        
        $numberPage = 1;
        if ($this->request->isPost()) {
            //$query = Criteria::fromInput($this->di, "Forum", $_POST);
            //$this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }

        $parameters["order"] = "ID";
        //$parameters["conditions"] = "Status = 0";

        $forum = Forum::find($parameters);
        if (count($forum) == 0) {
            $this->flash->notice(sprintf(self::$messageFail,"ไม่พบข้อมูล"));
            $limitPage = 10;
            // return $this->dispatcher->forward(array(
                // "controller" => "forum",
                // "action" => "index"
            // ));
        }
        else
            $limitPage = count($forum);

        $paginator = new Paginator(array(
            "data" => $forum,
            "limit"=> $limitPage,
            "page" => $numberPage
        ));
        $this->view->isAdmin = $this->isAdmin();
        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displayes the creation form
     */
    public function newAction()
    {
        if(!$this->isAdmin()) {
            return $this->response->redirect("forum/search");
        }
        
        $this->init();
    }

    /**
     * Edits a forum
     *
     * @param string $ID
     */
    public function editAction($ID)
    {
        if(!$this->isAdmin()) {
            return $this->response->redirect("forum/search");
        }

        if (!$this->request->isPost()) {

            $forum = Forum::findFirstByID($ID);
            if (!$forum) {
                $this->flash->error(sprintf(self::$messageFail,"ไม่พบข้อมูล"));

                return $this->dispatcher->forward(array(
                    "controller" => "forum",
                    "action" => "index"
                ));
            }

            $this->init();

            $this->view->ID = $forum->ID;
            $this->view->Name = $forum->Name;

            $this->tag->setDefault("ID", $forum->ID);
            $this->tag->setDefault("Name", $forum->Name);
            $this->tag->setDefault("Status", $forum->Status);
            
        }
    }

    /**
     * Creates a new forum
     */
    public function createAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "forum",
                "action" => "index"
            ));
        }

        $forum = new Forum();

        $forum->Name = $this->request->getPost("Name");
        $forum->Status = 0;
        //$forum->Status = $this->request->getPost("Status");
        

        if (!$forum->save()) {
            foreach ($forum->getMessages() as $message) {
                $this->flash->error(sprintf(self::$messageFail,$message));
            }

            return $this->dispatcher->forward(array(
                "controller" => "forum",
                "action" => "new"
            ));
        }

        $this->flash->success(sprintf(self::$messageSuccess,"บันทึกข้อมูลสำเร็จ"));

        //return $this->response->redirect('forum/search');
        
        return $this->dispatcher->forward(array(
            "controller" => "forum",
            "action" => "search"
        ));

    }

    /**
     * Saves a forum edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "forum",
                "action" => "index"
            ));
        }

        $ID = $this->request->getPost("ID");

        $forum = Forum::findFirstByID($ID);
        if (!$forum) {
            $this->flash->error(sprintf(self::$messageFail,"ไม่พบข้อมูล"));

            return $this->dispatcher->forward(array(
                "controller" => "forum",
                "action" => "index"
            ));
        }

        $forum->Name = $this->request->getPost("Name");
        $forum->Status = $this->request->getPost("Status");
        

        if (!$forum->save()) {

            foreach ($forum->getMessages() as $message) {
                $this->flash->error(sprintf(self::$messageFail,$message));
            }

            return $this->dispatcher->forward(array(
                "controller" => "forum",
                "action" => "edit",
                "params" => array($forum->ID)
            ));
        }

        $this->flash->success(sprintf(self::$messageSuccess,"บันทึกข้อมูลสำเร็จ"));

        return $this->dispatcher->forward(array(
            "controller" => "forum",
            "action" => "search"
        ));
        
        

    }

    /**
     * Deletes a forum
     *
     * @param string $ID
     */
    public function deleteAction($ID)
    {
        if(!$this->isAdmin()) {
            return $this->response->redirect("forum/search");
        }

        $forum = Forum::findFirstByID($ID);
        if (!$forum) {
            $this->flash->error(sprintf(self::$messageFail,"ไม่พบข้อมูล"));

            return $this->dispatcher->forward(array(
                "controller" => "forum",
                "action" => "index"
            ));
        }

        try {
            if (!$forum->delete()) {

                foreach ($forum->getMessages() as $message) {
                    $this->flash->error(sprintf(self::$messageFail,$message));
                }

                return $this->dispatcher->forward(array(
                    "controller" => "forum",
                    "action" => "search"
                ));
            }
        } catch (\Exception $e) {
            $this->flash->error(sprintf(self::$messageFail,"ไม่สามารถลบข้อมูลนี้ได้"));

            return $this->dispatcher->forward(array(
                "controller" => "forum",
                "action" => "search"
            ));
        }

        $this->flash->success(sprintf(self::$messageSuccess,"ลบข้อมูลสำเร็จ"));

        return $this->dispatcher->forward(array(
            "controller" => "forum",
            "action" => "index"
        ));
    }

    public function isAdmin()
    {
        
        //$privilege = (new SessionController())->getActivePrivilege();
        /*if($privilege!=null){
            $_POST['OwnerID'] = $privilege->OwnerID;
            
            if($privilege->SystemID != 7)
            {
                $this->flash->notice(sprintf(self::$messageFail,"ไม่พบสิทธิ์กาารใช้งาน"));
                
                return $this->dispatcher->forward(array(
                    "controller" => "index",
                    "action" => "index"
                ));
            }
        }
        /*$ID = $this->session->get("auth")['privilegeId'];
        
        $data = Privilege::findFirstByID($ID);*/
        if($this->user!=null){
            if($this->user->role == "cc-admin") {
                return true;
            }
        }
        else
            return false;
    }

    public function init()
    {
        $this->view->Status = Forum::$StatusName;
    }
}
