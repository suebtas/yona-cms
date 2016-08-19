<?php

namespace Clinic\Model;

class Approval extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $sessionid;

    /**
     *
     * @var string
     */
    public $approve_date;

    /**
     *
     * @var integer
     */
    public $level;

    /**
     *
     * @var integer
     */
    public $order;

    /**
     *
     * @var string
     */
    public $comment;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     *
     * @var integer
     */
    public $discovery_surveyid;

    /**
     *
     * @var integer
     */
    public $admin_userid;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('discovery_surveyid', 'Discovery survey', 'id', array('alias' => 'Discovery survey'));
        $this->belongsTo('sessionid', 'GroupSession', 'id', array('alias' => 'GroupSession'));
        $this->belongsTo('admin_userid', 'AdminUser', 'id', array('alias' => 'AdminUser'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'approval';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Approval[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Approval
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
