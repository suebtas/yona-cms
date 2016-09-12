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
        $fontStyleName = 'rStyle';
		$phpWord->addFontStyle($fontStyleName, array('bold' => true, 'italic' => true, 'size' => 16, 'allCaps' => true, 'doubleStrikethrough' => true));

		$paragraphStyleName = 'pStyle';
		$phpWord->addParagraphStyle($paragraphStyleName, array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, 'spaceAfter' => 100));

		$phpWord->addTitleStyle(1, array('bold' => true), array('spaceAfter' => 240));

		// New portrait section
		$section = $phpWord->addSection();

		// Simple text
		$section->addTitle('Welcome to PhpWord', 1);
		$section->addText('Hello World!');

		// Two text break
		$section->addTextBreak(2);

		// Define styles
		$section->addText('I am styled by a font style definition.', $fontStyleName);
		$section->addText('I am styled by a paragraph style definition.', null, $paragraphStyleName);
		$section->addText('I am styled by both font and paragraph style.', $fontStyleName, $paragraphStyleName);

		$section->addTextBreak();

		// Inline font style
		$fontStyle['name'] = 'Times New Roman';
		$fontStyle['size'] = 20;

		$textrun = $section->addTextRun();
		$textrun->addText('I am inline styled ', $fontStyle);
		$textrun->addText('with ');
		$textrun->addText('color', array('color' => '996699'));
		$textrun->addText(', ');
		$textrun->addText('bold', array('bold' => true));
		$textrun->addText(', ');
		$textrun->addText('italic', array('italic' => true));
		$textrun->addText(', ');
		$textrun->addText('underline', array('underline' => 'dash'));
		$textrun->addText(', ');
		$textrun->addText('strikethrough', array('strikethrough' => true));
		$textrun->addText(', ');
		$textrun->addText('doubleStrikethrough', array('doubleStrikethrough' => true));
		$textrun->addText(', ');
		$textrun->addText('superScript', array('superScript' => true));
		$textrun->addText(', ');
		$textrun->addText('subScript', array('subScript' => true));
		$textrun->addText(', ');
		$textrun->addText('smallCaps', array('smallCaps' => true));
		$textrun->addText(', ');
		$textrun->addText('allCaps', array('allCaps' => true));
		$textrun->addText(', ');
		$textrun->addText('fgColor', array('fgColor' => 'yellow'));
		$textrun->addText(', ');
		$textrun->addText('scale', array('scale' => 200));
		$textrun->addText(', ');
		$textrun->addText('spacing', array('spacing' => 120));
		$textrun->addText(', ');
		$textrun->addText('kerning', array('kerning' => 10));
		$textrun->addText('. ');

		// Link
		$section->addLink('https://github.com/PHPOffice/PHPWord', 'PHPWord on GitHub');
		$section->addTextBreak();

		// Image
		//$section->addImage('../images/img.jpg', array('width'=>18, 'height'=>18));
		$writers = array('Word2007' => 'docx', 'ODText' => 'odt', 'RTF' => 'rtf', 'HTML' => 'html', 'PDF' => 'pdf');
		// Save file
		//echo $this->write($phpWord, basename(__FILE__, '.php'), $writers);
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$objWriter->save('helloWorld.docx');
		$this->converttowordtemplate('test','helloWorld.docx');
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
		unlink($temp_file);

		$response->setStatusCode(200, "OK");
		//Return the response
		$response->send();
	}
}