<?php
namespace Clinic\Controller;
use Application\Mvc\Controller;
use Clinic\Model\AdminUser;
use Clinic\Model\Answer;
use Clinic\Model\DiscoverySurvey;
use Clinic\Model\Survey;

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
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/index.js')
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/clinic.js');
        $auth = $this->session->get('auth');
        $this->view->user = AdminUser::findFirst($auth->id);
    }

    public function indexAction()
    {
        $surveies = Survey::find(array("order"=>"no"));
        $this->view->summaryTotal = [];
        $this->view->summarySurveyReady = [];
        $this->view->summaryApprovalReady = [];
        $this->view->percentAdminReady=[];
        $this->view->percentApprovalReady = [];
        $result = [];
        foreach($surveies as $survey){
            $result[$survey->no]["summaryTotal"] = $survey->DiscoverySurvey->count();

            $result[$survey->no]["summarySurveyReady"] = $survey->getDiscoverySurvey(["status in (1,2,3)"])->count();
            
            $result[$survey->no]["percentSurveyReady"] = $result[$survey->no]["summarySurveyReady"] /$result[$survey->no]["summaryTotal"] * 100;


            $phql = "select count(*) c from Clinic\Model\DiscoverySurvey ds , Clinic\Model\Approval a where ds.surveyid = ?0 and a.discovery_surveyid = ds.id and a.status = 3 and a.level = 1";
            $rows = $this->modelsManager->executeQuery($phql,[$survey->id]);
            $result[$survey->no]["summaryApprovalReady"] = $rows->getFirst()->c;

            $result[$survey->no]["percentApprovalReady"] = $result[$survey->no]["summaryApprovalReady"] /$result[$survey->no]["summaryTotal"] * 100;


            $phql = "select count(*) c from Clinic\Model\DiscoverySurvey ds , Clinic\Model\Approval a where ds.surveyid = ?0 and a.discovery_surveyid = ds.id and a.status = 3 and a.level = 2";
            $rows = $this->modelsManager->executeQuery($phql,array($survey->id));
            $result[$survey->no]["summaryAdminReady"] = $rows->getFirst()->c;
            $result[$survey->no]["percentAdminReady"] = $result[$survey->no]["summaryAdminReady"] / $result[$survey->no]["summaryTotal"] * 100;
        }
        $this->view->summary = $result;
        //var_dump($this->view->summaryTotal["summaryAdminReady"]["1/2559"]);
        //var_dump($result);
        //die();
        // Dashboard JS Assets
        $this->assets->collection('modules-clinic-dashboard-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-dashboard.js')
            ->setTargetUri('assets/modules-clinic-dashboard.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/dashboard.js');
        if($this->view->user->role=='cc-admin')
            $this->view->listDiscoverySurvey = DiscoverySurvey::find(array("order"=>"surveyid desc"));
        else
            $this->view->listDiscoverySurvey = DiscoverySurvey::find(array("officeid=:0:","bind"=>[$this->view->user->officeid],"order"=>"surveyid desc"));
    }
    //กราฟแสดงสถานะการยืนยันข้อมูล
    public function dashboardAction(){
        $this->view->disable();
        $lastID = Survey::find()->getLast()->id;
        //$phql = "select DATE(last_update_survey) as date,count(*) as count from Clinic\Model\Answer GROUP BY DATE(last_update_survey)";
        $phql = "select DATE(a.last_update_survey) as date, count(*) as count 
        from Clinic\Model\Answer a, Clinic\Model\DiscoverySurvey ds 
        where a.discovery_surveyid = ds.id and a.last_update_survey is not null  and 
        ds.surveyid = :surveyid:
        GROUP BY DATE(a.last_update_survey)";
        $rows = $this->modelsManager->executeQuery($phql, array("surveyid"=>$lastID));
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
        ds.surveyid = :surveyid:
        GROUP BY gs.name, DATE(a.last_update_survey)";
        //$phql = "select DATE(last_update_survey) as date,count(*) as count from Clinic\Model\Answer GROUP BY DATE(last_update_survey)";
        $rows = $this->modelsManager->executeQuery($phql, array("surveyid"=>$lastID));
        if(!$rows)
            return "";
        $data = [];
        foreach ($rows as $row) {
            if($row["date"]!=null){
                $date = explode("-",$row["date"]);            
                $data["data"][] = ["date"=>["dd"=>$date[2],"mm"=>$date[1],"yy"=>$date[0]],"count"=>$row["count"]];
            }
        }

        $data["label"] = $row["name"];
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
