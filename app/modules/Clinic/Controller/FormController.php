<?php

namespace Clinic\Controller;

use Application\Mvc\Controller;
use Phalcon\Mvc\View;
use Clinic\Model\AdminUser;
use Clinic\Model\Office;
use Clinic\Model\BoundaryOffice;
use Phalcon\Mvc\Model\Resultset;
use Clinic\Form\Question\No1Form;

class FormController extends Controller
{

    public function initialize()
    {

        $this->setClinicEnvironment();
        $this->view->languages_disabled = true;

        $this->assets = $this->getDI()->get('assets');
        $this->assets->collection('modules-clinic-css')->setLocal(true)
            ->addFilter(new \Application\Assets\Filter\Less())
            ->setTargetPath(ROOT . '/assets/modules-clinic.css')
            ->setTargetUri('assets/modules-clinic.css')
            ->join(true)
            ->addCss(APPLICATION_PATH . '/modules/Clinic/assets/clinic.css');


        // Clinic JS Assets
        $this->assets->collection('modules-clinic-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic.js')
            ->setTargetUri('assets/modules-clinic.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/clinic.js');


        $auth = $this->session->get('auth');
        $user = AdminUser::findFirst($auth->id);
        $this->view->user = $user;
        $this->view->office =  Office::findFirst($user->officeid);
    }

    public function no1Action()
    {
        // no1 JS Assets
        $this->assets->collection('modules-clinic-no1-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no1.js')
            ->setTargetUri('assets/modules-clinic-no1.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no1.js');
            
        $model = new BoundaryOffice();
        $form = new No1Form();
        $auth = $this->session->get('auth');
        $user = AdminUser::findFirst($auth->id);
        //$this->view->office =  Office::findFirst($user->officeid);
        /*$test = $this->modelsManager->createBuilder()
                ->columns(array("close_officeid"))
                ->from('Clinic\Model\BoundaryOffice')
                ->getQuery()
                ->execute()
                ->setHydrateMode(Resultset::HYDRATE_ARRAYS)
                ->toArray(array("close_officeid"));
        var_dump($test);
        die();*/
        $no1 = [];
        $no2 = [];
        $no3 = [];
        $no4 = [];
        $tmp = BoundaryOffice::find(
                                array("owner_officeid = ?1 and boundaryid = 1",
                                    "bind" => array(
                                        1=>$user->officeid
                                        )
                                    )
                                )->toArray(array('close_officeid'));
        foreach ($tmp as $key => $value) {
            $no1[] = $value["close_officeid"];
        }
        $tmp = BoundaryOffice::find(
                                array("owner_officeid = ?1 and boundaryid = 2",
                                    "bind" => array(
                                        1=>$user->officeid
                                        )
                                    )
                                )->toArray(array('close_officeid'));
        foreach ($tmp as $key => $value) {
            $no2[] = $value["close_officeid"];
        }
        $tmp = BoundaryOffice::find(
                                array("owner_officeid = ?1 and boundaryid = 3",
                                    "bind" => array(
                                        1=>$user->officeid
                                        )
                                    )
                                )->toArray(array('close_officeid'));
        foreach ($tmp as $key => $value) {
            $no3[] = $value["close_officeid"];
        }
        $tmp = BoundaryOffice::find(
                                array("owner_officeid = ?1 and boundaryid = 4",
                                    "bind" => array(
                                        1=>$user->officeid
                                        )
                                    )
                                )->toArray(array('close_officeid'));
        foreach ($tmp as $key => $value) {
            $no4[] = $value["close_officeid"];
        }
        $obj = (object) array(
                'no1_1_3_1' => $no1,
                'no1_1_3_2' => $no2,
                'no1_1_3_3' => $no3,
                'no1_1_3_4' => $no4,
            );
        if ($this->request->isPost()) {
            $this->view->disable();
            $post = $this->request->getPost();
            $model->owner_officeid = $user->officeid;

            $option = $this->request->getPost("option");
            $officeID = $this->request->getPost("no1_1_3_1");
            if($officeID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryOffice();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_officeid = $officeID;
                    $modelT->boundaryid = 1;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryOffice::find(
                        array("close_officeid = ?1 and owner_officeid = ?2 and boundaryid = 1",
                            "bind"=>array(
                                1=>$officeID,
                                2=>$user->officeid)
                            )
                        );
                    $modelT->delete();
                }
            }

            $officeID = $this->request->getPost("no1_1_3_2");
            if($officeID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryOffice();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_officeid = $officeID;
                    $modelT->boundaryid = 2;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryOffice::find(
                        array("close_officeid = ?1 and owner_officeid = ?2 and boundaryid = 2",
                            "bind"=>array(
                                1=>$officeID,
                                2=>$user->officeid)
                            )
                        );
                    $modelT->delete();
                }
            }
        }
            $officeID = $this->request->getPost("no1_1_3_3");
            if($officeID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryOffice();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_officeid = $officeID;
                    $modelT->boundaryid = 3;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryOffice::find(
                        array("close_officeid = ?1 and owner_officeid = ?2 and boundaryid = 3",
                            "bind"=>array(
                                1=>$officeID,
                                2=>$user->officeid)
                            )
                        );
                    $modelT->delete();
                }
            }
            $officeID = $this->request->getPost("no1_1_3_4");
            if($officeID){
                if($option=='add'){
                    echo 'add';
                    $modelT = new BoundaryOffice();
                    $modelT->owner_officeid = $user->officeid;
                    $modelT->close_officeid = $officeID;
                    $modelT->boundaryid = 4;
                    if($modelT->save()==false)
                        echo 'error';
                    else
                        echo 'ok';
                }else if($option=='delete'){
                    echo 'delete';
                    $modelT = BoundaryOffice::find(
                        array("close_officeid = ?1 and owner_officeid = ?2 and boundaryid = 4",
                            "bind"=>array(
                                1=>$officeID,
                                2=>$user->officeid)
                            )
                        );
                    $modelT->delete();
                }
            }
        $form->setEntity($obj);
        $this->view->form = $form;
        $this->view->model = $model;



    }
    public function no2Action()
    {

        // no2 JS Assets
        $this->assets->collection('modules-clinic-no2-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no2.js')
            ->setTargetUri('assets/modules-clinic-no2.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no2.js');

    }
    public function no3Action()
    {
      // no3 JS Assets
      $this->assets->collection('modules-clinic-no3-js')
          ->setLocal(true)
          ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
          ->setTargetPath(ROOT . '/assets/modules-clinic-no3.js')
          ->setTargetUri('assets/modules-clinic-no3.js')
          ->join(true)
          ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no3.js');
    }
    public function no4Action()
    {
        $this->assets->collection('modules-clinic-no4-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no4.js')
            ->setTargetUri('assets/modules-clinic-no4.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no4.js');

    }
    public function no5Action()
    {
        $this->assets->collection('modules-clinic-no5-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no5.js')
            ->setTargetUri('assets/modules-clinic-no5.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no5.js');

    }
    public function no6Action()
    {
        $this->assets->collection('modules-clinic-no6-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no6.js')
            ->setTargetUri('assets/modules-clinic-no6.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no6.js');
    }
    public function no7Action()
    {
      // no7 JS Assets
      $this->assets->collection('modules-clinic-no7-js')
          ->setLocal(true)
          ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
          ->setTargetPath(ROOT . '/assets/modules-clinic-no7.js')
          ->setTargetUri('assets/modules-clinic-no7.js')
          ->join(true)
          ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no7.js');
    }
    public function no8Action()
    {

        // no1 JS Assets
        $this->assets->collection('modules-clinic-no8-js')
            ->setLocal(true)
            ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
            ->setTargetPath(ROOT . '/assets/modules-clinic-no8.js')
            ->setTargetUri('assets/modules-clinic-no8.js')
            ->join(true)
            ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no8.js');
    }
    public function no9Action()
    {
      // no9 JS Assets
      $this->assets->collection('modules-clinic-no9-js')
          ->setLocal(true)
          ->addFilter(new \Phalcon\Assets\Filters\Jsmin())
          ->setTargetPath(ROOT . '/assets/modules-clinic-no9.js')
          ->setTargetUri('assets/modules-clinic-no9.js')
          ->join(true)
          ->addJs(APPLICATION_PATH . '/modules/Clinic/assets/no9.js');
    }

}
