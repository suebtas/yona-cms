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
    public $create_survey;
    public $last_update_survey;
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
        $this->belongsTo('questionid', 'Clinic\Model\Question', 'id', array('alias' => 'Question'));
        $this->belongsTo('discovery_surveyid', 'Clinic\Model\DiscoverySurvey', 'id', array('alias' => 'DiscoverySurvey'));
    }
    public function beforeValidationOnCreate()
    {
        $this->create_survey = (new \DateTime('NOW'))->format('Y-m-d h:i:s');
        $this->last_update_survey = (new \DateTime('NOW'))->format('Y-m-d h:i:s');

    }
      /**
     * Sets the timestamp before update the confirmation
     */
    public function beforeValidationOnUpdate()
    {
        $this->last_update_survey = (new \DateTime('NOW'))->format('Y-m-d h:i:s');
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
