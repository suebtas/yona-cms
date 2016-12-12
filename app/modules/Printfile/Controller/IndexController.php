<?php

namespace Printfile\Controller;

use Application\Mvc\Controller;
use Clinic\Model\Visitweb;
use Publication\Model\Publication;
use Publication\Model\Type;
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
        //$this->view->disable();
        //parent::searchAction();
        

        $type = Type::findFirst("slug = 'FAQs'");
        $faqs = Publication::find("type_id = {$type->id}");

        $this->view->Faqs = $faqs;

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/FaqsForm.docx');
        date_default_timezone_set('Asia/Bangkok');
        //var_dump($faqs);
        //die(__DIR__.'/../Form/FaqsForm.docx');
        $i = 1;
        $Faqsitems = array();
        $quests = "Question1";
        $answers = "Answer1";
        /*foreach ($faqs as $value) 
        {
           
            //$Faqsitems['index'][] = $i;
            //$Faqsitems['quest'][] = $value->getTitle();
            //$Faqsitems['ans'][] = $value->getText();

            $quests = $quests.$i.".".$value->getTitle();
            $answers = $answers.$i.".".$value->getText();

            $i++;
        }*/
        //var_dump($answers);
        //die();
        //$document->cloneRow('F', $Faqsitems);
        //$document->cloneRow('DinamicTable', $Faqsitems); 
        $document->setValue('{questions}', $quests);
        $document->setValue('{answers}', $answers);

        $tmp_file = 'FaqsTMP.docx';
        $result = $document->saveAs($tmp_file);   
        //var_dump($result);
        $this->converttowordtemplate('FaqsPrint_',$tmp_file);

        die();//var/www/phalcon/app/modules/Printfile/Controller/../Form/FaqsForm.docx
    }

    public function linksAction()
    {
        //$this->view->disable();
        //parent::searchAction();
        

        $type = Type::findFirst("slug = 'Links'");
        $links = Publication::find("type_id = {$type->id}");

        $this->view->Faqs = $faqs;

        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $document = new \PhpOffice\PhpWord\TemplateProcessor(__DIR__.'/../Form/LinksForm.docx');
        date_default_timezone_set('Asia/Bangkok');
        //var_dump($faqs);
        //die(__DIR__.'/../Form/FaqsForm.docx');
        $i = 1;
        $Linksitems = array();
        $titles = "IST";
        $urls = "www.it.mut.ac.th";
        /*foreach ($links as $value) 
        {
           
            //$Linksitems['index'][] = $i;
            //$Linksitems['quest'][] = $value->getTitle();
            //$Linksitems['ans'][] = $value->getText();

            $titles = $titles.$i.".".$value->getTitle();
            $urls = $urls.$i.".".$value->getText();

            $i++;
        }*/
        //var_dump($answers);
        //die();
        //$document->cloneRow('F', $Linksitems);
        //$document->cloneRow('DinamicTable', $Linksitems); 
        $document->setValue('{titles}', $titles);
        $document->setValue('{links}', $links);

        $tmp_file = 'LinksTMP.docx';
        $result = $document->saveAs($tmp_file);   
        //var_dump($result);
        $this->converttowordtemplate('LinksPrint_',$tmp_file);

        die();//var/www/phalcon/app/modules/Printfile/Controller/../Form/FaqsForm.docx
    }

}
