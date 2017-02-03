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
use Clinic\Model\SurveyStatus;
use Phalcon\Forms\Element\Check;

class SurveyForm extends Form
{

    public function initialize()
    {
        $this->add(
            (new Text('no', [
                'required' => true,
            ]))->setLabel('No')
        );
        $this->add(
            (new Text('description', [
                'required' => true,
            ]))->setLabel('Description')
        );
        $this->add(
            (new Text('start', [
                'required' => true,
            ]))->setLabel('Start')
        );
        $this->add(
            (new Text('end', [
                'required' => true,
            ]))->setLabel('End')
        );


        $this->add(
            (new Select('status', SurveyStatus::find(), array(
                    'using' => array(
                        'id',
                        'name'
                    ))))
            ->setLabel('Status')
        );
        $this->add(
            (new Select('notification', [1=>1,2=>2,3=>3,5=>5,15=>15,30=>30],[
                'required' => true,
            ]))->setLabel('Notification: day')
        );
    }


}
