<?php

namespace Index\Controller;

use Application\Mvc\Controller;
use Clinic\Model\Visitweb;
use Page\Model\Page;
use Phalcon\Exception;

class IndexController extends Controller
{
    public function indexAction()
    {

		//$this->redirect('/admin/index/login');
        $this->view->bodyClass = 'home';

        $this->view->template = 1;
        $page = Page::findCachedBySlug('index');
        if (!$page) {
            throw new Exception("Page 'index' not found");
        }
        $this->helper->title()->append($page->getMetaTitle());
        $this->helper->meta()->set('description', $page->getMetaDescription());
        $this->helper->meta()->set('keywords', $page->getMetaKeywords());


        $auth = $this->session->get('auth');
        $permission_member = '';
        if($auth)
            $permission_member = ',"private"';

        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Publication\Model\Publication', 'p');
        $qb->leftJoin('Publication\Model\Type', null, 't');
        $qb->andWhere('t.slug = :type:', ['type' => 'news']);
        $qb->andWhere('p.date <= NOW()');
        $qb->andWhere("permission in ('public'$permission_member)");
        $qb->orderBy('p.date DESC');
        $qb->limit($limit);

        $entries = $qb->getQuery()->execute();


        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Clinic\Model\Post', 'p');
        $qb->orderBy('p.ID DESC');
        $qb->limit(5);

        //
        $event = $qb->getQuery()->execute();

        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Publication\Model\Publication', 'p');
        $qb->leftJoin('Publication\Model\Type', null, 't');
        $qb->andWhere('t.slug = :type:', ['type' => 'Event']);
        $qb->andWhere('p.date <= NOW()');
        $qb->orderBy('p.date DESC');
        $qb->limit($limit);

        $Events = $qb->getQuery()->execute();


        $qb = $this->modelsManager->createBuilder();
        $qb->addFrom('Clinic\Model\Post', 'p');
        $qb->orderBy('p.ID DESC');
        $qb->limit(5);


        $posts = $qb->getQuery()->execute();


        $this->view->page = $page;
        $this->view->entries = $entries;
        $this->view->Events = $Events;
        $this->view->posts = $posts;
        $this->helper->menu->setActive('index');

        $visit = Visitweb::findFirst("id = 1");
        $visit->amount = $visit->amount + 1;
        $visit->save();
        $this->view->visits = $visit->amount;

    }
    public function setAction($id){
      $this->session->set('template', $id);
      $this->redirect('/');

    }

}
