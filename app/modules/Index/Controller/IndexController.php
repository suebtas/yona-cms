<?php

namespace Index\Controller;

use Application\Mvc\Controller;
use Page\Model\Page;
use Phalcon\Exception;

class IndexController extends Controller
{

    public function indexAction()
    {
	
		//$this->redirect('/admin/index/login');
        $this->assets = $this->getDI()->get('assets');
        $this->assets->collection('modules-index-css')->setLocal(true)
            ->addFilter(new \Application\Assets\Filter\Less())
            ->setTargetPath(ROOT . '/assets/carousel.css')
            ->setTargetUri('assets/modules-index.css')
            ->join(true)
            ->addCss(APPLICATION_PATH . '/modules/Index/assets/carousel.css');

        $this->view->bodyClass = 'home';

        $page = Page::findCachedBySlug('index');
        if (!$page) {
            throw new Exception("Page 'index' not found");
        }
        $this->helper->title()->append($page->getMetaTitle());
        $this->helper->meta()->set('description', $page->getMetaDescription());
        $this->helper->meta()->set('keywords', $page->getMetaKeywords());
        $this->view->page = $page;

        $this->helper->menu->setActive('index');

    }

}
