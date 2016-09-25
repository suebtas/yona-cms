<?php

namespace Clinic\Model;

use Clinic\Helpers\Helper;
class Survey extends \Phalcon\Mvc\Model
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
    public $no;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $start;

    /**
     *
     * @var string
     */
    public $end;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'DiscoverySurvey', 'surveyid', array('alias' => 'DiscoverySurvey'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'survey';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Survey[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Survey
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public function getDateOfStartSurvey(){
        return Helper::dateOfThaiBuddha($this->start);
    }

    public function getDateOfEndSurvey(){
        return Helper::dateOfThaiBuddha($this->end);
    }
}
