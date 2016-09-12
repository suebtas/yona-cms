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
use Phalcon\Validation\Validator\PresenceOf;
use Clinic\Model\Amphur;

class NewsLevelForm extends Form
{

    public function initialize()
    {

        $this->add(
            (new Text('name', [
                'required' => true,
            ]))->setLabel('Name')
        );
        $this->add(
            (new Text('status', [
                'required' => true,
            ]))->setLabel('Status')
        );
        /*$this->add(
            (new Select('amphur', Amphur::find(), array(
                    'using' => array(
                        'id',
                        'name'
                    ))))
            ->setLabel('Amphur')
        );*/
    }


}
