<?php

/**
 * Routes
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace Index;

use Application\Mvc\Router\DefaultRouter;

class Routes
{

    public function init($router)
    {
        $router->addML('/', array(
            'module' => 'index',
            'controller' => 'index',
            'action' => 'index',
        ), 'index_index');



        $router->addML('/set{type:1|2|3|4}', array(
            'module' => 'index',
            'controller' => 'index',
            'action' => 'set'
        ), 'index_set');

        $router->addML('/serveygroupsession{type:[0-9]+}', array(
            'module' => 'index',
            'controller' => 'index',
            'action' => 'serveygroupsession'
        ), 'index_serveygroupsession');

        $router->addML('/serveygroupcomment{type:[0-9]+}', array(
            'module' => 'index',
            'controller' => 'index',
            'action' => 'serveygroupcomment'
        ), 'index_serveygroupsession');

        $router->addML('/dashboard', array(
            'module' => 'index',
            'controller' => 'index',
            'action' => 'dashboard'
        ), 'index_sdashboard');
        return $router;

    }

}