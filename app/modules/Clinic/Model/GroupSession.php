<?php

namespace Clinic\Model;

use Clinic\Model\Session;
class GroupSession extends \Phalcon\Mvc\Model
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
    public $name;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Clinic\Model\Session', 'group_session_id', array('alias' => 'Session'));        
        
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'group_session';
    }

    public function getSession($parameters = null)
    {
        return $this->getRelated("Session", $parameters);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Session[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Session
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
