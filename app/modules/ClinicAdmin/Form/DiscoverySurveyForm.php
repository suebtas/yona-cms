<?php

/**
 * AdminUser
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Form;

use Application\Form\Form;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\PresenceOf;

class DiscoverySurveyForm extends Form
{

    public function initialize()
    {
/*
        $this->add(
            (new Text('no', [
                'required' => true,
            ]))->setLabel('no')
        );
        $this->add(
            (new Check('status'))
                ->setLabel('Status')
        );*/

        $this->add(
            (new Text('enddate', [
                'required' => true,
            ]))->setLabel('End Date')
        );
    }


}
