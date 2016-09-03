<?php

namespace Clinic\Model;

class Comment extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $description;

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
     *
     * @var integer
     */
    public $sessionid;
    
    /**
     *
     * @var date
     */
    public $date;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('sessionid', 'Clinic\Model\Session', 'id', array('alias' => 'Session'));
        $this->belongsTo('discovery_surveyid', 'Clinic\Model\DiscoverySurvey', 'id', array('alias' => 'DiscoverySurvey'));
        $this->belongsTo('admin_userid', 'Clinic\Model\AdminUser', 'id', array('alias' => 'AdminUser'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'comment';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Comment[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Comment
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
