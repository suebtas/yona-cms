<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use ClinicAdmin\Form\DiscoverySurveyForm;
use Clinic\Model\DiscoverySurvey;

class DiscoverySurveyController extends Controller
{

    public function initialize()
    {

        $this->setAdminEnvironment();
        $this->helper->activeMenu()->setActive('admin-discovery-survey');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = DiscoverySurvey::find([
            "order" => "id ASC"
        ]);

        $this->helper->title($this->helper->at('Manage Discovery Survey'), true);
    }

    public function addAction()
    {
        $this->view->pick(['discovery-survey/edit']);

        $model = new DiscoverySurvey();
        $form = new DiscoverySurveyForm();

        if ($this->request->isPost()) {
            $model = new DiscoverySurvey();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                $model->status = isset($post["status"])? 1 : 0;
                if ($model->save()) {
                    $this->flash->success($this->helper->at('Discovery Survey created', ['name' => $model->getName()]));
                    $this->redirect($this->url->get() . 'clinic-admin/discovery-survey');
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

        $this->helper->title($this->helper->at('Discovery Survey'), true);
    }

    public function editAction($id)
    {
        $model = DiscoverySurvey::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/discovery-survey');
        }

        $form = new DiscoverySurveyForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                $model->status = isset($post["status"])? 1 : 0;
                if ($model->save() == true) {
                    $this->flash->success('Discovery Survey <b>' . $model->Office->Name ." :" . $model->Survey->No . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/discovery-survey');
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

        $this->helper->title($this->helper->at('Manage Discovery Survey'), true);
    }

    public function deleteAction($id)
    {
        $model = DiscoverySurvey::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/discovery-survey');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting DiscoverySurvey <b>' . $model->getName() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/discovery-survey');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete Discovery Survey'), true);
    }

}
