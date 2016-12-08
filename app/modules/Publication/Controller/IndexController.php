<?php

namespace Publication\Controller;

use Application\Mvc\Controller;
use Publication\Model\Publication;
use Phalcon\Exception;
use Publication\Model\Type;

class IndexController extends Controller
{

    public function indexAction()
    {
        $type = $this->dispatcher->getParam('type', 'string');
        $typeModel = Type::getCachedBySlug($type);
        if (!$typeModel) {
            throw new Exception("Publication hasn't type = '$type''");
        }

        $typeLimit = ($typeModel->getLimit()) ? $typeModel->getLimit() : 10;
        $limit = $this->request->getQuery('limit', 'string', $typeLimit);
        if ($limit != 'all') {
            $paginatorLimit = (int) $limit;
        } else {
            $paginatorLimit = 9999;
        }
        $page = $this->request->getQuery('page', 'int', 1);
        $auth = $this->session->get('auth');
        $permission_member = '';
        if($auth)
            $permission_member = ',"private"';

        $publications = Publication::find(array(
            "permission in ('public'$permission_member) and type_id = {$typeModel->getId()}",
            "order" => "date DESC",
        ));

        $paginator = new \Phalcon\Paginator\Adapter\Model(array(
            "data" => $publications,
            "limit" => $paginatorLimit,
            "page" => $page
        ));

        $this->view->paginate = $paginator->getPaginate();

        $this->helper->title()->append($typeModel->getHeadTitle());
        if ($page > 1) {
            $this->helper->title()->append($this->helper->translate('Страница №') . ' ' . $page);
        }
        $this->view->title = $typeModel->getTitle();
        $this->view->format = $typeModel->getFormat();
        $this->view->type = $type;

        $this->helper->menu->setActive($type);
    }

    public function publicationAction()
    {
        $slug = $this->dispatcher->getParam('slug', 'string');
        $type = $this->dispatcher->getParam('type', 'string');

        $publication = Publication::findCachedBySlug($slug);
        if (!$publication) {
            throw new Exception("Publication '$slug.html' not found");
        }
        if ($publication->getTypeSlug() != $type) {
            throw new Exception("Publication type <> $type");
        }

        $this->helper->title()->append($publication->getMetaTitle());
        $this->helper->meta()->set('description', $publication->getMetaDescription());
        $this->helper->meta()->set('keywords', $publication->getMetaKeywords());

        $this->view->publication = $publication;
        $this->helper->menu->setActive($type);

    }

}
