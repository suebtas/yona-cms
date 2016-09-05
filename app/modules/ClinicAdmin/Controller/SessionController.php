<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use ClinicAdmin\Form\SessionForm;
use Clinic\Model\Session;

class SessionController extends Controller
{

    public function initialize()
    {
        
        $this->setAdminEnvironment();
        $this->helper->activeMenu()->setActive('Session');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = Session::find([
            "order" => "id ASC"
        ]);

        $this->helper->title($this->helper->at('Manage Session'), true);
    }

    public function addAction()
    {
        $this->view->pick(['Session/edit']);

        $model = new Session();
        $form = new SessionForm();

        if ($this->request->isPost()) {
            $model = new Session();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save()) {
                    $this->flash->success($this->helper->at('Session created', ['name' => $model->getName()]));
                    $this->redirect($this->url->get() . 'clinic-admin/session');
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
        $model = Session::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/session');
        }

        $form = new SessionForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save() == true) {
                    $this->flash->success('User <b>' . $model->getName() . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/session');
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

        $this->helper->title($this->helper->at('Manage Session'), true);
    }

    public function deleteAction($id)
    {
        $model = Session::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/session');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting Session <b>' . $model->getName() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/session');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete Session'), true);
    }

}
