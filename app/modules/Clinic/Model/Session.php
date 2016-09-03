<?php

namespace Clinic\Model;

class Session extends \Phalcon\Mvc\Model
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
     *
     * @var string
     */
    public $label;
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Approval', 'sessionid', array('alias' => 'Approval'));
        $this->hasMany('id', 'Comment', 'sessionid', array('alias' => 'Comment'));
        $this->hasMany('id', 'Question', 'sessionid', array('alias' => 'Question'));
        $this->belongsTo('group_sessionid', 'GroupSession', 'id', array('alias' => 'GroupSession'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'session';
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

    public function getStep(){
        $step = explode('-',$this->label);
        return str_replace('.','_',$step[0]);
    }

}
