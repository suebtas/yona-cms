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



        $router->addML('/set{type:1|2|3}', array(
            'module' => 'index',
            'controller' => 'index',
            'action' => 'set'
        ), 'index_set');

        return $router;

    }

}