<?php

/**
 * AdminUser
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace Admin\Form;

use Admin\Model\AdminUser;
use Application\Form\Form;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\Email as ValidatorEmail;
use Phalcon\Validation\Validator\PresenceOf;
use Clinic\Model\Office;
use Phalcon\Validation\Validator\Uniqueness;

class AdminUserForm extends Form
{

    public function initialize()
    {
        $this->add(
            (new Text('login', [
                'required' => true,
            ]))->setLabel('Login')
        );

        $this->add(
            (new Email('email', [
                'required' => false,
            ]))
                ->addValidators([new ValidatorEmail([
                    'message' => 'Email format is invalid',
                    'allowEmpty' => true,
                        ])
                    ])
                ->setLabel('Email')
        );

        $this->add(
            (new Text('name'))
                ->setLabel('Name')
        );

        $this->add(
            (new Select('role', AdminUser::$roles))
                ->setLabel('Role')
        );

        $this->add(
            (new Password('password'))
                ->setLabel('Password')
        );

        $this->add(
            (new Check('active'))
                ->setLabel('Active')
        );
    }

    public function initAdding()
    {
        $password = $this->get('password');
        $password->setAttribute('required', true);
        $password->addValidator(new PresenceOf([
            'message' => 'Password is required',
        ]));

        $login  = $this->get('login');
        $login->addValidator(new Uniqueness([
            'model' => new AdminUser(),
            'field' => "login",
            'message' => "Value of field 'login' is already present in another record"
        ]));
    }
    public function initSaving(){
        $login  = $this->get('login');
        $login->setAttributes(array("readonly"=>"readonly"));
    }
}
