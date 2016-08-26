<?php

/**
 * AdminUser
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Form;

use ClinicAdmin\Model\ClinicAdminUser as AdminUser;
use Application\Form\Form;
use Admin\Form\AdminUserForm;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Email;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Check;
use Phalcon\Validation\Validator\Email as ValidatorEmail;
use Phalcon\Validation\Validator\PresenceOf;
use Clinic\Model\Office;

class ClinicAdminUserForm extends AdminUserForm
{

    public function initialize()
    {

        parent::initialize();
        $this->add(
            (new Select('office', Office::find(), array(
                    'using' => array(
                        'id',
                        'name'
                    ))))
            ->setLabel('Office')
        );

        $this->add(
            (new Select('role', AdminUser::$roles))
                ->setLabel('Role')
        );

    }


}
