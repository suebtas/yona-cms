<?php

/**
 * Routes
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin;

class Routes
{

    public function init($router)
    {
        $router->add('/clinic-admin', array(
            'module'     => 'ClinicAdmin',
            'controller' => 'AdminUser',
            'action'     => 'index',
        ))->setName('admin');

        return $router;

    }

}