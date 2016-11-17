<?php
 
namespace Clinic\Controller;

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Phalcon\Mvc\View;
use Clinic\Model\Post;
use Clinic\Model\Forum;
use Phalcon\Mvc\Model\Resultset;

class PostController extends ControllerBase
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
                    "controller" => "post",
                    "action" => "search"
            ));
        }
    }

    /**
     * Searches for post
     */
    public function searchAction()
    {
        /*$privilege = (new SessionController())->getActivePrivilege();
        if($privilege != null){
            $_POST['OwnerID'] = $privilege->OwnerID;
        }*/
        
        if(!isset($_GET['forum'])) {
            return $this->response->redirect('clinic/forum/search');
        }

        $forumID = $_GET['forum'];

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Post", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }

        $phql = "SELECT p.ID, p.Title, p.Status, p.postdate, COUNT(reply.headPostID) AS counting, MAX(reply.postdate) AS maxpostdate
                FROM Clinic\Model\Post p, Clinic\Model\Post AS reply 
                WHERE p.replypostid IS NULL AND p.ID = reply.headpostID AND p.ForumID = 1
                GROUP BY p.ID, p.Title, p.Status, p.postdate
                ORDER BY MAX(reply.postdate) DESC";
        $post = $this->modelsManager->executeQuery($phql);

        //$result_set = $this->db->query($phql);
        //$result_set->setFetchMode(Phalcon\Db::FETCH_ASSOC);
        //$post = $result_set->fetchAll($result_set);

        if (count($post) == 0) {
            $this->flash->notice(sprintf(self::$messageFail,"ไม่พบข้อมูล"));
			$limitPage = 10;
        }
		else
			$limitPage = count($post);
		
        $this->view->forumId = $forumID;

        $paginator = new Paginator(array(
            "data" => $post,
            "limit"=> $limitPage,
            "page" => $numberPage
        ));

        $func = new Post();
        $this->view->func = $func;
        $this->view->isAdmin = $this->isAdmin();
        $this->view->page = $paginator->getPaginate();
    }

    public function commentAction()
    {
        if(!isset($_GET['topic'])) {
            return $this->response->redirect('post/index');
        }

        $topicID = $_GET['topic'];

        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, "Post", $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = array();
        }

        $parameters['order'] = 'ID';
        $parameters[] = "HeadPostID = {$topicID} AND ReplyPostID = {$topicID}";
        $post = Post::find($parameters);
        $posttmp = Post::findFirst("HeadPostID = {$topicID}");

        if (count($post) == 0 && empty($posttmp)) {
            $this->flash->notice("The search did not find any post");
        }
        
        $this->view->isAdmin = $this->isAdmin();
        $this->view->MyID = $this->user->id; //$this->session->get("auth")['id'];
        $this->view->headtopic = $posttmp;
        $this->view->forumId = $posttmp->getForumid();
        $this->view->topicId = $topicID;

        $this->view->userName = $this->user->name;

        $this->view->page = $post;
    }

    /**
     * Displayes the creation form
     */
    public function newAction()
    {
        $this->init();
    }

    public function newReplyAction($ID)
    {
        if (!$this->request->isPost()) {

            $post = Post::findFirstByID($ID);
            if (!$post) {
                $this->flash->error(sprintf(self::$messageFail,"ไม่พบข้อมูล"));

                return $this->dispatcher->forward(array(
                    "controller" => "post",
                    "action" => "index"
                ));
            }

            $this->tag->setDefault("ReplyPostID", $ID);
            $this->tag->setDefault("HeadPostID", $post->HeadPostID);
            $this->tag->setDefault("ForumID", $post->getForumid());
            $this->tag->setDefault("Title", $post->getTitle());
        }
    }

    /**
     * Edits a post
     *
     * @param string $ID
     */
    public function editAction($ID)
    {
        if(!$this->isAdmin()) {
            $forumId = Post::findFirstByID($ID)->ForumID;
            return $this->response->redirect("post/search?forum={$forumId}");
        }

        if (!$this->request->isPost()) {

            $post = Post::findFirstByID($ID);
            if (!$post) {
                $this->flash->error(sprintf(self::$messageFail,"ไม่พบข้อมูล"));

                return $this->dispatcher->forward(array(
                    "controller" => "post",
                    "action" => "index"
                ));
            }

            $this->init();

            $this->view->ID = $post->ID;

            $this->tag->setDefault("ID", $post->ID);
            $this->tag->setDefault("PersonnelID", $post->PersonnelID);
            $this->tag->setDefault("ReplyPostID", $post->ReplyPostID);
            $this->tag->setDefault("ForumID", $post->ForumID);
            $this->tag->setDefault("Title", $post->Title);
            $this->tag->setDefault("Detail", $post->Detail);
            $this->tag->setDefault("PostDate", $post->PostDate);
            $this->tag->setDefault("Status", $post->Status);
        }
    }

    /**
     * Creates a new post
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "index"
            ));
        }

        $post = new Post();

        $post->PersonnelID = $this->user->id;
        $post->ReplyPostID = $this->request->getPost("ReplyPostID");
        $post->Title = $this->request->getPost("Title");
        $post->ForumID = $this->request->getPost("ForumID");
        $post->Detail = $this->request->getPost("Detail");
        date_default_timezone_set('Asia/Bangkok');
        $now = new \DateTime();
        $post->PostDate = $now->format('Y-m-d H:i:s');
        $post->Status = 0;

        if (!$post->save()) {
            foreach ($post->getMessages() as $message) {
                $this->flash->error(sprintf(self::$messageFail,$message));
            }

            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "new"
            ));
        }

        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file){
                mkdir("./public/files/post/{$post->ID}/", 0777, true);
                $file->moveTo("./public/files/post/{$post->ID}/" . $file->getName());
            }
        }


        if(is_null($post->ReplyPostID)) {
            $post->HeadPostID = $post->getId();
        } else {
            $post->HeadPostID = $this->request->getPost("HeadPostID");
        }
        $post->save();

        $this->flash->success(sprintf(self::$messageSuccess,"บันทึกข้อมูลสำเร็จ"));

        return $this->response->redirect("clinic/post/comment?topic={$post->HeadPostID}#{$post->ID}");

    }

    /**
     * Saves a post edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "index"
            ));
        }

        $ID = $this->request->getPost("ID");

        $post = Post::findFirstByID($ID);
        if (!$post) {
            $this->flash->error(sprintf(self::$messageFail,"ไม่พบข้อมูล"));

            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "index"
            ));
        }

        $post->PersonnelID = $this->user->id;
        $post->ReplyPostID = $this->request->getPost("ReplyPostID");
        $post->ForumID = $this->request->getPost("ForumID");
        $post->Title = $this->request->getPost("Title");
        $post->Detail = $this->request->getPost("Detail");
        $post->PostDate = Post::findFirstByID($ID)->PostDate;

        if($this->request->getPost("Status") == null) {
            $post->Status = Post::findFirstByID($ID)->Status;
        } else {
            $post->Status = $this->request->getPost("Status");
        }        

        if (!$post->save()) {

            foreach ($post->getMessages() as $message) {
                $this->flash->error(sprintf(self::$messageFail,$message));
            }

            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "edit",
                "params" => array($post->ID)
            ));
        }

        $this->flash->success(sprintf(self::$messageSuccess,"บันทึกข้อมูลสำเร็จ"));

        return $this->dispatcher->forward(array(
            "controller" => "post",
            "action" => "search"
        ));

    }

    public function hideAction($ID)
    {

        if (!$this->request->isPost()) {

            $post = Post::findFirstByID($ID);
            if (!$post) {
                $this->flash->error(sprintf(self::$messageFail,"ไม่พบข้อมูล"));

                return $this->dispatcher->forward(array(
                    "controller" => "post",
                    "action" => "index"
                ));
            }

            $post->Status = 1;

            if (!$post->save()) {
                foreach ($post->getMessages() as $message) {
                    $this->flash->error(sprintf(self::$messageFail,$message));
                }

                return $this->dispatcher->forward(array(
                    "controller" => "post",
                    "action" => "index"
                ));
            }

            return $this->response->redirect("post/comment?topic={$post->HeadPostID}");
        }
    }

    /**
     * Deletes a post
     *
     * @param string $ID
     */
    public function deleteAction($ID)
    {
        if(!$this->isAdmin()) {
            $forumId = Post::findFirstByID($ID)->ForumID;
            return $this->response->redirect("post/search?forum={$forumId}");
        }

        $post = Post::findFirstByID($ID);
        if (!$post) {
            $this->flash->error(sprintf(self::$messageFail,"ไม่พบข้อมูล"));

            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "index"
            ));
        }

        try {
            if (!$post->delete()) {

                foreach ($post->getMessages() as $message) {
                    $this->flash->error(sprintf(self::$messageFail,$message));
                }

                return $this->dispatcher->forward(array(
                    "controller" => "post",
                    "action" => "search"
                ));
            }
        } catch (\Exception $e) {
            $this->flash->error(sprintf(self::$messageFail,"ไม่สามารถลบข้อมูลนี้ได้"));

            return $this->dispatcher->forward(array(
                "controller" => "post",
                "action" => "search"
            ));
        }

        $this->flash->success(sprintf(self::$messageSuccess,"ลบข้อมูลสำเร็จ"));

        return $this->dispatcher->forward(array(
            "controller" => "post",
            "action" => "index"
        ));
    }

    public function isAdmin()
    {
        if($this->user!=null){
            if($this->user->role == "cc-admin") {
                return true;
            }
        }
        else
            return false;
    }

    public function imageprofileAction($PersonnelID)
    {
        $image = Images::findFirstByID($PersonnelID);
        header('Content-Type: image/JFIF');
        header('Content-Disposition: attachment; filename='.basename($id.'.jpg'));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        ob_clean();
        flush();
        echo $image->Image;
        exit();
    }

    public function init()
    {
        $this->view->Status = Post::$StatusName;
        $this->view->forum = Forum::find(array("order"=>"Name"));
    }

}
