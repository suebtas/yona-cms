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
        $this->helper->activeMenu()->setActive('admin-news-type');
        $this->view->languages_disabled = true;
    }

    public function indexAction()
    {
        $this->view->entries = NewsType::find([
            "order" => "id ASC"
        ]);

        $this->helper->title($this->helper->at('Manage News Type'), true);
    }

    public function addAction()
    {
        $this->view->pick(['news-type/edit']);

        $model = new NewsType();
        $form = new NewsTypeForm();

        if ($this->request->isPost()) {
            $model = new NewsType();
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                $model->status = isset($post["status"])? 1 : 0;
                if ($model->save()) {
                    $this->flash->success($this->helper->at('News Type created', ['name' => $model->getName()]));
                    $this->redirect($this->url->get() . 'clinic-admin/news-type');
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

        $this->helper->title($this->helper->at('News Type'), true);
    }

    public function editAction($id)
    {
        $model = NewsType::findFirst($id);
        if (!$model) {
            $this->redirect($this->url->get() . 'clinic-admin/news-type');
        }

        $form = new NewsTypeForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->bind($post, $model);
            if ($form->isValid()) {
                $model->status = isset($post["status"])? 1 : 0;
                if ($model->save() == true) {
                    $this->flash->success('User <b>' . $model->getName() . '</b> has been saved');
                    return $this->redirect($this->url->get() . 'clinic-admin/news-type');
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

        $this->helper->title($this->helper->at('Manage News Type'), true);
    }

    public function deleteAction($id)
    {
        $model = NewsType::findFirst($id);
        if (!$model) {
            return $this->redirect($this->url->get() . 'clinic-admin/news-type');
        }

        if ($this->request->isPost()) {
            $model->delete();
            $this->flash->warning('Deleting NewsType <b>' . $model->getName() . '</b>');
            return $this->redirect($this->url->get() . 'clinic-admin/news-type');
        }

        $this->view->model = $model;

        $this->helper->title($this->helper->at('Delete News Type'), true);
    }

}
