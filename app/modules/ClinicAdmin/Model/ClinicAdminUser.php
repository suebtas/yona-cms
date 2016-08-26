<?php
/**
 * @copyright Copyright (c) 2011 - 2014 Aleksandr Torosh (http://wezoom.com.ua)
 * @author Aleksandr Torosh <webtorua@gmail.com>
 */

namespace ClinicAdmin\Model;

use Phalcon\Mvc\Model\Validator\Uniqueness;
use Admin\Model\AdminUser;
use stdClass;

class ClinicAdminUser extends AdminUser
{


    public $officeid;

    public static $roles;

    public function initialize()
    {
        self::$roles = array_merge(parent::$roles,[
                            'cc-user' => 'Clinic Center User',
                            'cc-approver' => 'Clinic Center Approver',
                            'cc-admin' => 'Clinic Center Admin'
                            ]);
        parent::initialize();
    }


    public function validation()
    {
        /*$this->validate(new Uniqueness(
            [
                "field"   => "login",
                "message" => $this->getDi()->get('helper')->translate("The Login must be unique")
            ]
        ));

        $this->validate(new Uniqueness(
            [
                "field"   => "email",
                "message" => $this->getDi()->get('helper')->translate("The Email must be unique")
            ]
        ));*/

        return $this->validationHasFailed() != true;

    }

    public function getRoleTitle()
    {
        if (array_key_exists($this->role, self::$roles)) {
            return self::$roles[$this->role];
        }
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getOffice()
    {
        return $this->officeid;
    }

    public function setOffice($officeid)
    {
        $this->officeid = $officeid;
    }

}
