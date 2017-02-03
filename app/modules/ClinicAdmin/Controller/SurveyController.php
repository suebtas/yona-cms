<?php

/**
 * SurveyController
 * @copyright Copyright (c) 2016 - 2100 Suebtas Limsaihua (http://wezoom.com.ua)
 * @author Suebtas Limsaihua <suebtas@mut.ac.th>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use ClinicAdmin\Form\SurveyForm;
use Clinic\Model\Survey;
use Clinic\Model\DiscoverySurvey;

class SurveyController extends Controller
{

    public function initialize()
    {
        
        $this->setAdminEnvironment();
        $this->helper->activeMenu()->setActive('admin-survey');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = Survey::find([
            "order" => "id ASC"
        ]);

        $this->helper->title($this->helper->at('Manage Survey'), true);
    }

    public function addAction()
    {
        $this->view->pick(['survey/edit']);

        $model = new Survey();
        $form = new SurveyForm();

        if ($this->request->isPost()) {
            $model = new Survey();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save()) {
                    $model->generateDiscoverySuryver();
                    $this->flash->success($this->helper->at('Survey created', ['no' => $model->getNo()]));
                    $this->redirect($this->url->get() . 'clinic-admin/survey');
                } else {
                    $this->flashErrors($model);
                }
            } else {
                $this->flashErrors($form);
            }
        }

        $this->view->form = $form;
        $this->view->model = $model;
        $this->view->submitButton = $this->helper->at('Add New');

        $this->helper->title($this->helper->at('Administrator'), true);
    }

    public function editAction($id)
    {
        $model = Survey::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/survey');
        }

        $form = new SurveyForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save() == true) {
                    $this->flash->success('User <b>' . $model->getNo() . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/survey');
                } else {
                    $this->flashErrors($model);
                }
            } else {
                $this->flashErrors($form);
            }
        } else {
            $form->setEntity($model);
        }

        $this->view->submitButton = $this->helper->at('Save');
        $this->view->form = $form;
        $this->view->model = $model;

        $this->helper->title($this->helper->at('Manage Survey'), true);
    }

    public function deleteAction($id)
    {
        $model = Survey::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/survey');
        }

        if ($this->request->isPost()) {
            $data = DiscoverySurvey::find(array("conditions"=>"surveyid=?0","bind"=>array($model->id)));
            foreach($data as $discoverySurvey){
                foreach($discoverySurvey->Answer as $answer){
                     $answer->delete();
                }

                foreach($discoverySurvey->Approval as $approval){
                     $approval->delete();
                }
                foreach($discoverySurvey->Comment as $comment){
                     $comment->delete();
                }
                $discoverySurvey->delete();
            }
            
            $model->delete();
            $this->flash->warning('Deleting Survey <b>' . $model->getNo() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/survey');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete Survey'), true);
    }

}
