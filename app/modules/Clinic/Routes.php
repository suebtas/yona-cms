<?php

/**
 * Routes
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace Clinic;


class Routes
{

    public function init($router)
    {

        $router->add('/clinic', array(
            'module'     => 'clinic',
            'controller' => 'index',
            'action'     => 'index',
        ))->setName('index');
		
        return $router;

    }

}