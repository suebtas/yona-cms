<?php
namespace Clinic\Controller;
use Application\Mvc\Controller;

class ControllerBase extends Controller
{
	static $messageSuccess = <<<context
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>แจ้งเตือน</h4>
		%s
	</div>
context;
	static $messageFail = <<<context
	<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<h4>แจ้งเตือน</h4>
		%s
	</div>
context;

	public function initialize()
    {
        $this->view->setTemplateAfter('common');
		$auth = $this->session->get('auth');
		//Fix me ระบบค่าคงที่ ตรวจสอบสิทธิ์การการใช้งานเมนูระบบ งานบุคคล
    
    }
	
	protected function forward($uri){
    	$uriParts = explode('/', $uri);
    	return $this->dispatcher->forward(
    		array(
    			'controller' => $uriParts[0], 
    			'action' => $uriParts[1]
    		)
    	);
    }
}
