<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use ClinicAdmin\Form\AmphurForm;
use Clinic\Model\Amphur;

class AmphurController extends Controller
{

    public function initialize()
    {
        $this->setAdminEnvironment();
        $this->helper->activeMenu()->setActive('amphur');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = Amphur::find([
            "order" => "id DESC"
        ]);

        $this->helper->title($this->helper->at('Manage Amphur'), true);
    }

    public function addAction()
    {
        $this->view->pick(['amphur/edit']);

        $model = new Amphur();
        $form = new AmphurForm();

        if ($this->request->isPost()) {
            $model = new Amphur();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save()) {
                    $this->flash->success($this->helper->at('Amphur created', ['name' => $model->getName()]));
                    $this->redirect($this->url->get() . 'clinic-admin/amphur');
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
        $model = Amphur::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/amphur');
        }

        $form = new AmphurForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save() == true) {
                    $this->flash->success('User <b>' . $model->getName() . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/amphur');
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

        $this->helper->title($this->helper->at('Manage Amphur'), true);
    }

    public function deleteAction($id)
    {
        $model = Amphur::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/amphur');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting amphur <b>' . $model->getName() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/amphur');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete amphur'), true);
    }

}
