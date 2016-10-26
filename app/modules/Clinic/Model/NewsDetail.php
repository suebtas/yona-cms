<?php

namespace Clinic\Model;

use Clinic\Model\AdminUser;
use Clinic\Model\News;
use Clinic\Model\Office;
class NewsDetail extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
    public $newsid;
    public $userid;
    public $status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'newsdetail';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Office[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Office
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNewsId()
    {
        return $this->newsid;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getTHStatus()
    {
        if($this->status == 0)
            return "ไม่อ่าน";
        else
            return "อ่าน";
    }

    public function getOffice()
    {
        $name = AdminUser::findFirst($this->userid);

        return $name->Office->name;
    }
}
