<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use ClinicAdmin\Form\TambonForm;
use Clinic\Model\Amphur;
use Clinic\Model\Tambon;

class TambonController extends Controller
{

    public function initialize()
    {
        $this->setAdminEnvironment();
        $this->helper->activeMenu()->setActive('admin-tambon');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = Tambon::find([
            "order" => "id DESC"
        ]);

        $this->helper->title($this->helper->at('Manage tambon'), true);
    }

    public function addAction()
    {
        $this->view->pick(['tambon/edit']);

        $model = new Tambon();
        $form = new TambonForm();

        if ($this->request->isPost()) {
            $model = new Tambon();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save()) {
                    $this->flash->success($this->helper->at('Amphur created', ['name' => $model->getName()]));
                    $this->redirect($this->url->get() . 'clinic-admin/tambon');
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
        $model = Tambon::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/tambon');
        }

        $form = new TambonForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save() == true) {
                    $this->flash->success('User <b>' . $model->getName() . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/tambon');
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

        $this->helper->title($this->helper->at('Manage Tambon'), true);
    }

    public function deleteAction($id)
    {
        $model = Tambon::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/tambon');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting tambon <b>' . $model->getName() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/tambon');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete tambon'), true);
    }

}
