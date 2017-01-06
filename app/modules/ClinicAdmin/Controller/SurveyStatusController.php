<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use ClinicAdmin\Form\SurveyStatusForm;
use Clinic\Model\SurveyStatus;

class SurveyStatusController extends Controller
{

    public function initialize()
    {
        
        $this->setAdminEnvironment();
        $this->helper->activeMenu()->setActive('admin-survey-status');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = SurveyStatus::find([
            "order" => "id ASC"
        ]);

        $this->helper->title($this->helper->at('Manage SurveyStatus'), true);
    }

    public function addAction()
    {
        $this->view->pick(['survey-status/edit']);

        $model = new SurveyStatus();
        $form = new SurveyStatusForm();

        if ($this->request->isPost()) {
            $model = new SurveyStatus();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save()) {
                    $this->flash->success($this->helper->at('SurveyStatus created', ['name' => $model->getName()]));
                    $this->redirect($this->url->get() . 'clinic-admin/survey-status');
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
        $model = SurveyStatus::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/survey-status');
        }

        $form = new SurveyStatusForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save() == true) {
                    $this->flash->success('User <b>' . $model->getName() . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/survey-status');
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

        $this->helper->title($this->helper->at('Manage SurveyStatus'), true);
    }

    public function deleteAction($id)
    {
        $model = SurveyStatus::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/survey-status');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting SurveyStatus <b>' . $model->getName() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/survey-status');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete Survey Status'), true);
    }

}
