<?php

namespace Clinic\Model;

class Answer extends \Phalcon\Mvc\Model
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
    public $answer;

    /**
     *
     * @var integer
     */
    public $discovery_surveyid;

    /**
     *
     * @var integer
     */
    public $questionid;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('questionid', 'Question', 'id', array('alias' => 'Question'));
        $this->belongsTo('discovery_surveyid', 'Discovery survey', 'id', array('alias' => 'Discovery survey'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'answer';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Answer[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Answer
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
