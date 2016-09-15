<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use ClinicAdmin\Form\NewsTypeForm;
use Clinic\Model\NewsType;

class NewsTypeController extends Controller
{

    public function initialize()
    {

        $this->setAdminEnvironment();
        $this->helper->activeMenu()->setActive('NewsType');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = NewsType::find([
            "order" => "id ASC"
        ]);

        $this->helper->title($this->helper->at('Manage NewsType'), true);
    }

    public function addAction()
    {
        $this->view->pick(['NewsType/edit']);

        $model = new NewsType();
        $form = new NewsTypeForm();

        if ($this->request->isPost()) {
            $model = new NewsType();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save()) {
                    $this->flash->success($this->helper->at('NewsType created', ['name' => $model->getName()]));
                    $this->redirect($this->url->get() . 'clinic-admin/newstype');
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
        $model = NewsType::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/newstype');
        }

        $form = new NewsTypeForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save() == true) {
                    $this->flash->success('User <b>' . $model->getName() . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/newstype');
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

        $this->helper->title($this->helper->at('Manage NewsType'), true);
    }

    public function deleteAction($id)
    {
        $model = NewsType::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/newstype');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting NewsType <b>' . $model->getName() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/newstype');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete NewsType'), true);
    }

}