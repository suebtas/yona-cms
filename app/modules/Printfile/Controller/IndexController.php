<?php

namespace Printfile\Controller;

use Application\Mvc\Controller;
use Clinic\Model\Visitweb;
use Publication\Model\Publication;
use Publication\Model\Type;
use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Clinic\Model\DiscoverySurvey;
use Clinic\Model\Survey;
use Phalcon\Exception;
use PhpOffice\PhpWord;

class IndexController extends Controller
{
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

    public function initialize()
    {
        $this->setWebsiteEnvironment();
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
       // $this->view->disable();
       //parent::indexAction();
       //$this->view->aaa = 'aaaa';
    }

    public function faqsAction()
    {
        $this->view->disable();
        //parent::searchAction();


        $type = Type::findFirst("slug = 'FAQs'");
        $faqs = Publication::find("type_id = {$type->id}");

        //$this->view->Faqs = $faqs;

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FaqsForm.docx');
        date_default_timezone_set('Asia/Bangkok');

        $document->cloneRow('index', count($faqs));


        $i = 1;

        foreach ($faqs as $value)
        {
            $document->setValue('index#'.$i, $i);
            $document->setValue('quest#'.$i, $value->getTitle());
            //$answer = str_replace("<p>", "", $value->getText());
            //$answer2 = str_replace("</p>", "", $answer);
            $document->setValue('answer#'.$i, $value->getMetaDescription());
            //echo $answer2;
            $i++;
        }
        $document->setValue('date',date("d.m.Y"));
        //var_dump($answers);
        //die();

        $tmp_file = 'FaqsTMP.docx';
        $result = $document->saveAs($tmp_file);
        //var_dump($result);
        $this->converttowordtemplate('FaqsPrint_',$tmp_file);

    }

    public function linksAction()
    {
        $this->view->disable();
        //parent::searchAction();


        $type = Type::findFirst("slug = 'Links'");
        $links = Publication::find("type_id = {$type->id}");

        //var_dump($links);


        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/LinksForm.docx');
        date_default_timezone_set('Asia/Bangkok');
        //var_dump($faqs);
        //die(__DIR__.'/../Form/FaqsForm.docx');
        $document->cloneRow('index', count($links));


        $i = 1;

        foreach ($links as $value)
        {
            $document->setValue('index#'.$i, $i);
            $document->setValue('name#'.$i, $value->getTitle());
            //$answer = str_replace("<p>", "", $value->getText());
            //$answer2 = str_replace("</p>", "", $answer);
            $document->setValue('url#'.$i, $value->getMetaDescription());
            //echo $answer2;
            $i++;
        }
        $document->setValue('date',date("d.m.Y"));
        

        $tmp_file = 'LinksTMP.docx';
        $result = $document->saveAs($tmp_file);
        //var_dump($result);
        $this->converttowordtemplate('LinksPrint_',$tmp_file);
        //die();
    }

    public function userAction()
    {
        $this->view->disable();
        //parent::searchAction();


        $userAdmin = AdminUser::find();

        //var_dump($links);


        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/UserForm.docx');
        date_default_timezone_set('Asia/Bangkok');
        //var_dump($faqs);
        //die(__DIR__.'/../Form/FaqsForm.docx');
        $document->cloneRow('index', count($userAdmin));


        $i = 1;

        foreach ($userAdmin as $value)
        {
            $document->setValue('index#'.$i, $i);
            $document->setValue('user#'.$i, $value->login);
            $document->setValue('office#'.$i, $value->office->name);
            if($value->active == 1)
                $active = "ใช้งาน";
            else
                $active = "ระงับ";
            $document->setValue('status#'.$i, $active);
            //echo $answer2;
            $i++;
        }
        $document->setValue('date',date("d.m.Y"));
        //die();

        $tmp_file = 'UserTMP.docx';
        $result = $document->saveAs($tmp_file);
        //var_dump($result);
        $this->converttowordtemplate('UserPrint_',$tmp_file);

    }

    public function reportAction()
    {
        $this->view->disable();
        //parent::searchAction();


        $userAdmin = AdminUser::find();

        //var_dump($links);


        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/ReportForm.docx');
        date_default_timezone_set('Asia/Bangkok');


        $tmp_file = 'ReportTMP.docx';
        $result = $document->saveAs($tmp_file);
        //var_dump($result);
        $this->converttowordtemplate('ReportPrint_',$tmp_file);

    }

    public function surveystatusAction()
    {
        $this->view->disable();
        //parent::searchAction();


        $survey = Survey::findFirst("status = 'A'");
        $listDiscoverySurvey = DiscoverySurvey::find("surveyid = {$survey->id}");

        //var_dump($links);


        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/SurveyStatusForm.docx');
        date_default_timezone_set('Asia/Bangkok');
        //var_dump($faqs);
        //die(__DIR__.'/../Form/FaqsForm.docx');
        $document->cloneRow('index', count($listDiscoverySurvey));


        $i = 1;

        foreach ($listDiscoverySurvey as $value)
        {
            $document->setValue('index#'.$i, $i);
            $document->setValue('office#'.$i, $value->office->name);
            $document->setValue('status#'.$i, $value->getStatusName());
            //echo $answer2;
            $i++;
        }
        $document->setValue('date',date("d.m.Y"));
        //die();

        $tmp_file = 'SurveyStatusTMP.docx';
        $result = $document->saveAs($tmp_file);
        //var_dump($result);
        $this->converttowordtemplate('SurveyStatusPrint_',$tmp_file);

    }

}
