<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use ClinicAdmin\Form\OfficeForm;
use Clinic\Model\Office;

class OfficeController extends Controller
{

    public function initialize()
    {
        
        $this->setAdminEnvironment();
        $this->helper->activeMenu()->setActive('admin-office');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = Office::find([
            "order" => "id DESC"
        ]);

        $this->helper->title($this->helper->at('Manage Office'), true);
    }

    public function addAction()
    {
        $this->view->pick(['office/edit']);

        $model = new Office();
        $form = new OfficeForm();

        if ($this->request->isPost()) {
            $model = new Office();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save()) {
                    $this->flash->success($this->helper->at('Office created', ['name' => $model->getName()]));
                    $this->redirect($this->url->get() . 'clinic-admin/office');
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
        $model = Office::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/office');
        }

        $form = new OfficeForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $model->setCheckboxes($post);
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save() == true) {
                    $this->flash->success('User <b>' . $model->getName() . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/office');
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

        $this->helper->title($this->helper->at('Manage Office'), true);
    }

    public function deleteAction($id)
    {
        $model = Office::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/office');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting office <b>' . $model->getName() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/office');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete office'), true);
    }

}
