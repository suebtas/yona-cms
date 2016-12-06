<?php
namespace Clinic\Controller;
use Application\Mvc\Controller;
use Clinic\Model\AdminUser;
use Clinic\Model\Answer;
use Clinic\Model\DiscoverySurvey;

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

        // Dashboard JS Assets
        $this->assets->collection('modules-clinic-dashboard-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-dashboard.js')
            ->setTargetUri('assets/modules-clinic-dashboard.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/dashboard.js');
        $this->view->listDiscoverySurvey = DiscoverySurvey::find();
    }
    public function dashboardAction(){
        $this->view->disable();
        //$phql = "select DATE(last_update_survey) as date,count(*) as count from Clinic\Model\Answer GROUP BY DATE(last_update_survey)";
        $phql = "select DATE(a.last_update_survey) as date, count(*) as count 
        from Clinic\Model\Answer a, Clinic\Model\DiscoverySurvey ds 
        where a.discovery_surveyid = ds.id and ds.surveyid = 1  
        GROUP BY DATE(a.last_update_survey)";
        $rows = $this->modelsManager->executeQuery($phql);
        $data = [];
        foreach ($rows as $row) {
            $date = explode("-",$row["date"]);
            $data["data"][] = ["date"=>["dd"=>$date[2],"mm"=>$date[1],"yy"=>$date[0]],"count"=>$row["count"]];
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

    public function serveyGroupSessionAction($no){
        $this->view->disable();
        $phql = "select gs.name, DATE(a.last_update_survey) as date ,count(*) as count 
        from Clinic\Model\DiscoverySurvey ds, Clinic\Model\Answer a,
        Clinic\Model\Question q, Clinic\Model\Session s, Clinic\Model\GroupSession gs 
        where a.discovery_surveyid = ds.id 
        and ds.surveyid = 1 and 
        a.questionid = q.id and 
        s.id=q.sessionid and 
        gs.id = s.group_session_id and 
        gs.id = '$no' and
        ds.surveyid = 1 
        GROUP BY gs.name, DATE(a.last_update_survey)";
        //$phql = "select DATE(last_update_survey) as date,count(*) as count from Clinic\Model\Answer GROUP BY DATE(last_update_survey)";
        $rows = $this->modelsManager->executeQuery($phql);
        if(!$rows)
            return "";
        $data = [];
        foreach ($rows as $row) {
            $date = explode("-",$row["date"]);            
            $data["data"][] = ["date"=>["dd"=>$date[2],"mm"=>$date[1],"yy"=>$date[0]],"count"=>$row["count"]];
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
    public function generatePasswordAction(){

        require_once __DIR__ . '/../../../../vendor/password.php';

        $this->view->disable();
        //echo password_hash('user01', PASSWORD_DEFAULT); echo "<br>";

        echo "insert into admin_user (officeid,role,login,name,password,active) values(1,'cc-user','user01','เจ้าหน้าที่องค์การบริหารส่วนจังหวัดระยอง','".password_hash('0101', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(2,'cc-user','user02','เจ้าหน้าที่เทศบาลนครระยอง','".password_hash('0202', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(3,'cc-user','user03','เจ้าหน้าที่เทศบาลเมืองมาบตาพุด','".password_hash('0303', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(4,'cc-user','user04','เจ้าหน้าที่เทศบาลตำบลแกลงกะเฉด','".password_hash('0404', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(5,'cc-user','user05','เจ้าหน้าที่เทศบาลตำบลทับมา','".password_hash('0505', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(6,'cc-user','user06','เจ้าหน้าที่เทศบาลตำบลบ้านเพ','".password_hash('0606', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(7,'cc-user','user07','เจ้าหน้าที่เทศบาลตำบลน้ำคอก','".password_hash('0707', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(8,'cc-user','user08','เจ้าหน้าที่เทศบาลตำบลเนินพระ','".password_hash('0808', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(9,'cc-user','user09','เจ้าหน้าที่เทศบาลตำบลเชิงเนิน','".password_hash('0909', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(10,'cc-user','user10','เจ้าหน้าที่องค์การบริหารส่วนตำบลนาตาขวัญ','".password_hash('1010', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(11,'cc-user','user11','เจ้าหน้าที่องค์การบริหารส่วนตำบลบ้านแลง','".password_hash('1111', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(12,'cc-user','user12','เจ้าหน้าที่องค์การบริหารส่วนตำบลสำนักทอง','".password_hash('1212', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(13,'cc-user','user13','เจ้าหน้าที่องค์การบริหารส่วนตำบลกะเฉด','".password_hash('1313', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(14,'cc-user','user14','เจ้าหน้าที่องค์การบริหารส่วนตำบลแกลง','".password_hash('1414', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(15,'cc-user','user15','เจ้าหน้าที่องค์การบริหารส่วนตำบลตะพง','".password_hash('1515', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(16,'cc-user','user16','เจ้าหน้าที่องค์การบริหารส่วนตำบลเพ','".password_hash('1616', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(17,'cc-user','user17','เจ้าหน้าที่เทศบาลตำบลกองดิน','".password_hash('1717', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(18,'cc-user','user18','เจ้าหน้าที่เทศบาลตำบลทุ่งควายกิน','".password_hash('1818', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(19,'cc-user','user19','เจ้าหน้าที่เทศบาลตำบลบ้านนา','".password_hash('1919', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(20,'cc-user','user20','เจ้าหน้าที่เทศบาลตำบลเมืองแกลง','".password_hash('2020', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(21,'cc-user','user21','เจ้าหน้าที่เทศบาลตำบลเนินฆ้อ','".password_hash('2121', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(22,'cc-user','user22','เจ้าหน้าที่เทศบาลตำบลสองสลึง','".password_hash('2222', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(23,'cc-user','user23','เจ้าหน้าที่เทศบาลตำบลปากน้ำประแส','".password_hash('2323', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(24,'cc-user','user24','เจ้าหน้าที่เทศบาลตำบลสุนทรภู่','".password_hash('2424', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(25,'cc-user','user25','เจ้าหน้าที่องค์การบริหารส่วนตำบลกระแสบน','".password_hash('2525', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(26,'cc-user','user26','เจ้าหน้าที่องค์การบริหารส่วนตำบลชากโดน','".password_hash('2626', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(27,'cc-user','user27','เจ้าหน้าที่องค์การบริหารส่วนตำบลทางเกวียน','".password_hash('2727', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(28,'cc-user','user28','เจ้าหน้าที่องค์การบริหารส่วนตำบลทุ่งควายกิน','".password_hash('2828', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(29,'cc-user','user29','เจ้าหน้าที่องค์การบริหารส่วนตำบลพังราด','".password_hash('2929', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(30,'cc-user','user30','เจ้าหน้าที่องค์การบริหารส่วนตำบลวังหว้า','".password_hash('3030', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(31,'cc-user','user31','เจ้าหน้าที่องค์การบริหารส่วนตำบลคลองปูน','".password_hash('3131', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(32,'cc-user','user32','เจ้าหน้าที่องค์การบริหารส่วนตำบลกองดิน','".password_hash('3232', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(33,'cc-user','user33','เจ้าหน้าที่องค์การบริหารส่วนตำบลห้วยยาง','".password_hash('3333', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(34,'cc-user','user34','เจ้าหน้าที่เทศบาลตำบลมาบข่า','".password_hash('3434', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(35,'cc-user','user35','เจ้าหน้าที่เทศบาลตำบลมะขามคู่','".password_hash('3535', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(36,'cc-user','user36','เจ้าหน้าที่เทศบาลตำบลมาบข่าพัฒนา','".password_hash('3636', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(37,'cc-user','user37','เจ้าหน้าที่องค์การบริหารส่วนตำบลนิคมพัฒนา','".password_hash('3737', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(38,'cc-user','user38','เจ้าหน้าที่องค์การบริหารส่วนตำบลพนานิคม','".password_hash('3838', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(39,'cc-user','user39','เจ้าหน้าที่เทศบาลตำบลชำฆ้อ','".password_hash('3939', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(40,'cc-user','user40','เจ้าหน้าที่องค์การบริหารส่วนตำบลเขาชะเมา','".password_hash('4040', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(41,'cc-user','user41','เจ้าหน้าที่องค์การบริหารส่วนตำบลเขาน้อย','".password_hash('4141', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(42,'cc-user','user42','เจ้าหน้าที่องค์การบริหารส่วนตำบลน้ำเป็น','".password_hash('4242', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(43,'cc-user','user43','เจ้าหน้าที่เทศบาลตำบลชุมแสง','".password_hash('4343', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(44,'cc-user','user44','เจ้าหน้าที่องค์การบริหารส่วนตำบลชุมแสง','".password_hash('4444', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(45,'cc-user','user45','เจ้าหน้าที่องค์การบริหารส่วนตำบลป่ายุบใน','".password_hash('4545', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(46,'cc-user','user46','เจ้าหน้าที่องค์การบริหารส่วนตำบลวังจันทร์','".password_hash('4646', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(47,'cc-user','user47','เจ้าหน้าที่องค์การบริหารส่วนตำบลพลงตาเอี่ยม','".password_hash('4747', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(48,'cc-user','user48','เจ้าหน้าที่เทศบาลเมืองบ้านฉาง','".password_hash('4848', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(49,'cc-user','user49','เจ้าหน้าที่เทศบาลตำบลบ้านฉาง','".password_hash('4949', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(50,'cc-user','user50','เจ้าหน้าที่เทศบาลตำบลพลา','".password_hash('5050', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(51,'cc-user','user51','เจ้าหน้าที่เทศบาลตำบลสำนักท้อน','".password_hash('5151', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(52,'cc-user','user52','เจ้าหน้าที่องค์การบริหารส่วนตำบลสำนักท้อน','".password_hash('5252', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(53,'cc-user','user53','เจ้าหน้าที่เทศบาลตำบลบ้านปลวกแดง','".password_hash('5353', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(54,'cc-user','user54','เจ้าหน้าที่เทศบาลตำบลจอมพลเจ้าพระยา','".password_hash('5454', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(55,'cc-user','user55','เจ้าหน้าที่องค์การบริหารส่วนตำบลปลวกแดง','".password_hash('5555', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(56,'cc-user','user56','เจ้าหน้าที่องค์การบริหารส่วนตำบลตาสิทธิ์','".password_hash('5656', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(57,'cc-user','user57','เจ้าหน้าที่องค์การบริหารส่วนตำบลละหาร','".password_hash('5757', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(58,'cc-user','user58','เจ้าหน้าที่องค์การบริหารส่วนตำบลแม่น้ำคู้','".password_hash('5858', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(59,'cc-user','user59','เจ้าหน้าที่องค์การบริหารส่วนตำบลมาบยางพร','".password_hash('5959', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(60,'cc-user','user60','เจ้าหน้าที่องค์การบริหารส่วนตำบลหนองไร่','".password_hash('6060', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(61,'cc-user','user61','เจ้าหน้าที่เทศบาลตำบลบ้านค่าย','".password_hash('6161', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(62,'cc-user','user62','เจ้าหน้าที่เทศบาลตำบลบ้านค่ายพัฒนา','".password_hash('6262', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(63,'cc-user','user63','เจ้าหน้าที่เทศบาลตำบลชากบก','".password_hash('6363', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(64,'cc-user','user64','เจ้าหน้าที่องค์การบริหารส่วนตำบลตาขัน','".password_hash('6464', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(65,'cc-user','user65','เจ้าหน้าที่องค์การบริหารส่วนตำบลหนองตะพาน','".password_hash('6565', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(66,'cc-user','user66','เจ้าหน้าที่องค์การบริหารส่วนตำบลหนองละลอก','".password_hash('6666', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(67,'cc-user','user67','เจ้าหน้าที่องค์การบริหารส่วนตำบลหนองบัว','".password_hash('6767', PASSWORD_DEFAULT)."',1);"; "<br>";
        echo "insert into admin_user (officeid,role,login,name,password,active) values(68,'cc-user','user68','เจ้าหน้าที่องค์การบริหารส่วนตำบลบางบุตร','".password_hash('6868', PASSWORD_DEFAULT)."',1);"; "<br>";
            }

}
