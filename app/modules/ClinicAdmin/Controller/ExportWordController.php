<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use PhpOffice\PhpWord;

class ExportWordController extends Controller
{

    public function initialize()
    {
        
        $this->setAdminEnvironment();
        $this->view->languages_disabled = true;
    }

    
    public function indexAction()
    {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        
		$document = new \PhpOffice\PhpWord\TemplateProcessor('/var/www/phalcon/app/modules/ClinicAdmin/Form/FormNo6.docx');
		//$document = $phpWord->loadTemplate(__DIR__.'/../Form/FormNo6.docx');
		//var_dump(($document));die();
		date_default_timezone_set('Asia/Bangkok');

		$document->setValue('{startdate}', "today");

		$tmp_file = 'helloWorld.docx';
		$result = $document->saveAs($tmp_file);   
		//die($result);
	 	$this->converttowordtemplate('reportWorkrecordProfile',$tmp_file);

		
    }
    	
	public function converttowordtemplate($name,$temp_file){		
		// Save file
		$fname = $name. date("d.m.Y-H.i") . ".docx";
		$response = new \Phalcon\Http\Response();

		// Redirect output to a client’s web browser (Excel2007)
		$response->setHeader('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		$response->setHeader('Content-Disposition', 'attachment;filename="' . $fname . '"');
		$response->setHeader('Cache-Control', 'max-age=0');

		// If you're serving to IE 9, then the following may be needed
		$response->setHeader('Cache-Control', 'max-age=1');

		//Set the content of the response
		$response->setContent(file_get_contents($temp_file));
		// delete temp file
		//unlink($temp_file);

		$response->setStatusCode(200, "OK");
		//Return the response
		$response->send();
	}
}