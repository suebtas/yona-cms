<?php

namespace Index\Controller;

use Application\Mvc\Controller;
use Clinic\Model\Visitweb;
use Page\Model\Page;
use Phalcon\Exception;
use Widget\Model\Widget;
use Publication\Model\Publication;
use Publication\Model\Type;
use Clinic\Model\Survey;

class IndexController extends Controller
{
    public function indexAction()
    {

        // Clinic JS Assets
        $this->assets->collection('modules-index-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/index.js')
            ->setTargetUri('assets/index.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Index/assets/index.js');

		//$this->redirect('/admin/index/login');
        $this->view->bodyClass = 'home';

        $this->view->template = 1;
        $page = Page::findCachedBySlug('index');
        if (!$page) {
            throw new Exception("Page 'index' not found");
        }
        $this->helper->title()->append($page->getMetaTitle());
        $this->helper->meta()->set('description', $page->getMetaDescription());
        $this->helper->meta()->set('keywords', $page->getMetaKeywords());


        $auth = $this->session->get('auth');
        $permission_member = '';
        if($auth)
            $permission_member = ',"private"';
        $limit = 10;
        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Publication\Model\Publication', 'p');
        $qb->leftJoin('Publication\Model\Type', null, 't');
        $qb->andWhere('t.slug = :type:', ['type' => 'news']);
        $qb->andWhere('t.display_date = "1"');
        $qb->andWhere('p.date <= NOW()');
        $qb->andWhere("permission in ('public'$permission_member)");
        $qb->orderBy('p.date DESC');
        $qb->limit($limit);

        $entries = $qb->getQuery()->execute();


        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Clinic\Model\Post', 'p');
        $qb->orderBy('p.ID DESC');
        $qb->limit(5);

        //
        // $event = $qb->getQuery()->execute();

        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Publication\Model\Publication', 'p');
        $qb->leftJoin('Publication\Model\Type', null, 't');
        $qb->andWhere('t.slug in ("Event","Portfolio")');
        $qb->andWhere('t.display_date = "1"');
        $qb->andWhere('p.date <= NOW()');
        $qb->orderBy('p.date DESC');
        $qb->limit($limit);

        $Events = $qb->getQuery()->execute();


        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Clinic\Model\Post', 'p');
        $qb->orderBy('p.ID DESC');
        $qb->limit(5);

        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Publication\Model\Publication', 'p');
        $qb->leftJoin('Publication\Model\Type', null, 't');
        $qb->andWhere('t.slug in ("Report","Document")');
        $qb->andWhere('t.display_date = "1"');
        $qb->andWhere('p.date <= NOW()');
        $qb->orderBy('p.date DESC');
        $qb->limit($limit);

        $Docs = $qb->getQuery()->execute();


        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Clinic\Model\Post', 'p');
        $qb->orderBy('p.ID DESC');
        $qb->limit(5);

        $posts = $qb->getQuery()->execute();


        $this->view->page = $page;
        $this->view->entries = $entries;
        $this->view->Events = $Events;
        $this->view->Docs = $Docs;
        $this->view->posts = $posts;
        $this->helper->menu->setActive('index');

        $visit = Visitweb::findFirst("id = 1");
        $visit->amount = $visit->amount + 1;
        $visit->save();
        $this->view->visits = $visit->amount;
        $message = Widget::findFirst();
        $this->view->messages = $message->title;

        $popup = Publication::findFirst("slug = 'popup'");
        if($popup!=null)
        $this->view->popups = $popup->getPermission();
        
        $type = Type::findFirst("slug = 'news'");
        if($type!=null)
        $this->view->news_display = $type->getDisplayDate();

        $type = Type::findFirst("slug = 'event'");
        if($type!=null)
        $this->view->event_display = $type->getDisplayDate();

        $type = Type::findFirst("slug = 'portfolio'");
        if($type!=null)
        $this->view->portfolio_display = $type->getDisplayDate();

        $type = Type::findFirst("slug = 'report'");
        if($type!=null)
        $this->view->report_display = $type->getDisplayDate();

        $type = Type::findFirst("slug = 'document'");
        if($type!=null)
        $this->view->document_display = $type->getDisplayDate();

        $type = Type::findFirst("slug = 'links'");
        if($type!=null)
        $this->view->links_display = $type->getDisplayDate();

        $type = Type::findFirst("slug = 'faqs'");
        if($type!=null)
        $this->view->faqs_display = $type->getDisplayDate();

        $type = Type::findFirst("slug = 'about'");
        if($type!=null)
        $this->view->about_display = $type->getDisplayDate();




    }
    public function setAction($id){
      $this->session->set('template', $id);
      $this->redirect('/');

    }
    //กราฟแสดงสถิติการตอบแบบสำรวจในแต่ละด้าน
    public function serveyGroupSessionAction($no){
        $lastID = Survey::find()->getLast()->id;
        $this->view->disable();
        $phql = "select gs.name, DATE(a.last_update_survey) as date ,count(*) as count
        from Clinic\Model\DiscoverySurvey ds, Clinic\Model\Answer a,
        Clinic\Model\Question q, Clinic\Model\Session s, Clinic\Model\GroupSession gs
        where a.discovery_surveyid = ds.id
        and ds.surveyid = :surveyid: and
        a.questionid = q.id and
        s.id=q.sessionid and
        gs.id = s.group_session_id and
        gs.id = '$no' and
        ds.surveyid = $lastID
        GROUP BY gs.name, DATE(a.last_update_survey)";
        $phql = "select gs.name, DATE(a.last_update_survey) as date ,count(*) as count from Clinic\Model\Answer a,Clinic\Model\Question q, Clinic\Model\Session s, Clinic\Model\GroupSession gs where a.questionid = q.id and s.id=q.sessionid and gs.id = s.group_session_id and gs.id = '$no' GROUP BY gs.name, DATE(a.last_update_survey)";
        
        //$phql = "select DATE(last_update_survey) as date,count(*) as count from Clinic\Model\Answer GROUP BY DATE(last_update_survey)";
        $rows = $this->modelsManager->executeQuery($phql,array("surveyid"=>$lastID));
        if(!$rows)
            return "";
        $data = [];
        foreach ($rows as $row) {
            //if($row["date"]!=null){
                $date = explode("-",$row["date"]);
                $data["data"][] = ["date"=>["dd"=>$date[2],"mm"=>$date[1],"yy"=>$date[0]],"count"=>$row["count"]];
            //}
        }

        $data["label"] = $row["name"];
        echo json_encode($data);

    }
    //กราฟแสดงสถิติการตอบแบบสำรวจในแต่ละด้าน
    public function serveyGroupCommentAction($no){
        $this->view->disable();
        $lastID =  Survey::find()->getLast()->id;
        $phsql = "select s.name as name, sum(aq.c) as count_answer , sum(ap2.c) as count_approver  , sum(ap3.c) as count_admin
                from session s
                left join (
                    select count(a.answer) c, q.sessionid from answer a,question q, discovery_survey ds where (q.id = a.questionid and ds.id = a.discovery_surveyid and ds.surveyid = :surveyid and ds.status = 3 ) group by q.sessionid ) as ap3 on (s.id = ap3.sessionid)
                    
                left join (
                    select count(a.answer) c, q.sessionid from answer a,question q, discovery_survey ds where (q.id = a.questionid and ds.id = a.discovery_surveyid and ds.surveyid = :surveyid and ds.status = 2 ) group by q.sessionid ) as ap2 on (s.id = ap2.sessionid)
                    
                left join (
                    select count(a.answer) c, q.sessionid from answer a,question q, discovery_survey ds where (q.id = a.questionid and ds.id = a.discovery_surveyid and ds.surveyid = :surveyid) group by q.sessionid ) as aq on (s.id = aq.sessionid)
                where s.active = 1 and s.id = :id
                group by s.name ";

        $di             = \Phalcon\DI::getDefault();
        $db             = $di['db'];
        $data           = $db->query( $phsql ,["id"=>$no,"surveyid"=>$lastID]);
        $data->setFetchMode(\Phalcon\Db::FETCH_OBJ);
        $rows        = $data->fetchAll();
        //var_dump($rows);
        //die();
        //$rows = $this->modelsManager->executeQuery($phql);
        if(!$rows)
            return "";
        $data = [];
        foreach ($rows as $key=>$row) {
            //var_dump( $row );
            //echo $row->name , $row->count_admin;
            $data["data"][] = ["count_answer"=>$row->count_answer,"count_approver"=>$row->count_approver,"count_admin"=>$row->count_admin];
        }
        $data["label"] = $row->name;
        echo json_encode($data);

    }
    //กราฟแสดงสถานะการยืนยันข้อมูล
    public function dashboardAction(){
        $this->view->disable();
        //$phql = "select DATE(last_update_survey) as date,count(*) as count from Clinic\Model\Answer GROUP BY DATE(last_update_survey)";
        $phql = "select DATE(a.last_update_survey) as date, count(*) as count
        from Clinic\Model\Answer a, Clinic\Model\DiscoverySurvey ds
        where a.discovery_surveyid = ds.id   
        GROUP BY DATE(a.last_update_survey)"; //-- and a.last_update_survey is not null
        $rows = $this->modelsManager->executeQuery($phql); 
        $data = [];
        foreach ($rows as $row) {
            if($row["date"]!=null){
                $date = explode("-",$row["date"]);
                $data["data"][] = ["date"=>["dd"=>$date[2],"mm"=>$date[1],"yy"=>$date[0]],"count"=>$row["count"]];
            }
        }
        echo json_encode($data);

        //echo json_encode($data);
        /*$request =$this->request;
        if ($request->isPost()==true) {
            if ($request->isAjax() == true) {

                    echo $cname = $_POST["cname"];
                }
            }*/
    }
}
