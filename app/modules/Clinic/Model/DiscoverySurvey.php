<?php

namespace Clinic\Model;

class DiscoverySurvey extends \Phalcon\Mvc\Model
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
    public $officeid;

    /**
     *
     * @var integer
     */
    public $surveyid;

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
        $this->hasMany('id', 'Answer', 'discovery_surveyid', array('alias' => 'Answer'));
        $this->hasMany('id', 'Approval', 'discovery_surveyid', array('alias' => 'Approval'));
        $this->hasMany('id', 'Comment', 'discovery_surveyid', array('alias' => 'Comment'));
        $this->belongsTo('officeid', 'Office', 'id', array('alias' => 'Office'));
        $this->belongsTo('surveyid', 'Survey', 'id', array('alias' => 'Survey'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'discovery_survey';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DiscoverySurvey[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DiscoverySurvey
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
