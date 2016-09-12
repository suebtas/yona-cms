<?php

/**
 * AdminUserController
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Controller;

use Application\Mvc\Controller;
use ClinicAdmin\Form\NewsLevelForm;
use Clinic\Model\NewsLevel;

class NewsLevelController extends Controller
{

    public function initialize()
    {

        $this->setAdminEnvironment();
        $this->helper->activeMenu()->setActive('NewsLevel');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = NewsLevel::find([
            "order" => "id ASC"
        ]);

        $this->helper->title($this->helper->at('Manage NewsLevel'), true);
    }

    public function addAction()
    {
        $this->view->pick(['NewsLevel/edit']);

        $model = new NewsLevel();
        $form = new NewsLevelForm();

        if ($this->request->isPost()) {
            $model = new NewsLevel();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save()) {
                    $this->flash->success($this->helper->at('NewsLevel created', ['name' => $model->getName()]));
                    $this->redirect($this->url->get() . 'clinic-admin/newslevel');
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
        $model = NewsLevel::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/newslevel');
        }

        $form = new NewsLevelForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                if ($model->save() == true) {
                    $this->flash->success('User <b>' . $model->getName() . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/newslevel');
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

        $this->helper->title($this->helper->at('Manage NewsLevel'), true);
    }

    public function deleteAction($id)
    {
        $model = NewsLevel::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/newslevel');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting NewsLevel <b>' . $model->getName() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/newslevel');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete NewsLevel'), true);
    }

}
