<?php

namespace Clinic\Model;

class Question extends \Phalcon\Mvc\Model
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
    public $no;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Answer', 'questionid', array('alias' => 'Answer'));
        $this->belongsTo('sessionid', 'Session', 'id', array('alias' => 'Session'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'question';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Question[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Question
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
