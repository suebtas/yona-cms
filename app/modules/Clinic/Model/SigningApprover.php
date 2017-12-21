<?php

namespace Clinic\Model;

use Clinic\Model\GroupSession;
use Clinic\Model\DiscoverySurvey;
class SigningApprover extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $group_session_id;

    /**
     *
     * @var integer
     */
    public $discovery_surveyid;
    /**
     *
     * @var string
     */
    public $name;
    /**
     *
     * @var string
     */
    public $phone;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('id', 'Clinic\Model\GroupSession', 'group_session_id', array('alias' => 'GroupSession'));    
        $this->belongsTo('id', 'Clinic\Model\DiscoverySurvey', 'discovery_survey_id', array('alias' => 'DiscoverySurvey'));       
        
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'signing_approver';
    }

    public function getGroupSession($parameters = null)
    {
        return $this->getRelated("GroupSession", $parameters);
    }

    public function getDiscoverySurvey($parameters = null)
    {
        return $this->getRelated("DiscoverySurvey", $parameters);
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
