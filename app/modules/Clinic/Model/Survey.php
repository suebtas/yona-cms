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
     *
     * @var int
     */
    public $status;
    /**
     *
     * @var int
     */
    public $notification;
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

    public function getId()
    {
        return $this->id;
    }
    
    public function getNo()
    {
        return $this->no;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getStart()
    {
        return $this->start;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getNotification()
    {
        return $this->notification;
    }
    public function getYear()
    {
        return $this->no;
    }
    public function isExpired()
    {
        $now = new \DateTime(); // Today
        //echo $now->format('d/m/Y'); // echos today! 
        $dateBegin = new \DateTime($this->getStart());
        $dateEnd  = new \DateTime($this->getEnd());

        return !($now->getTimestamp() > $dateBegin->getTimestamp() && $now->getTimestamp() < $dateEnd->getTimestamp());
    }
}
