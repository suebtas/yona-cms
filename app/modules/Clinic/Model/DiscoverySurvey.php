<?php

namespace Clinic\Model;

class DiscoverySurvey extends \Phalcon\Mvc\Model
{

    static $statusName = ['อยู่ระหว่างสำรวจ','พิจารณาปรับแก้ข้อมูล','สำรวจสำเร็จ'];
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
        $this->hasMany('id', 'Clinic\Model\Answer', 'discovery_surveyid', array('alias' => 'Answer'));
        $this->hasMany('id', 'Clinic\Model\Approval', 'discovery_surveyid', array('alias' => 'Approval'));
        $this->hasMany('id', 'Clinic\Model\Comment', 'discovery_surveyid', array('alias' => 'Comment'));
        $this->belongsTo('officeid', 'Clinic\Model\Office', 'id', array('alias' => 'Office'));
        $this->belongsTo('surveyid', 'Clinic\Model\Survey', 'id', array('alias' => 'Survey'));
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


    public function getApproval($parameters = null)
    {
        return $this->getRelated("Approval", $parameters)->getFirst();
    }

    public function getApprovalStatus($parameters = null)
    {
        $approval = $this->getApproval($parameters);
        if($approval!=null)
            $status = $approval->status;
        else
            $status = 0;
        return $status;
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

    public function getStatusName(){
        if($this->status!=null)
            return DiscoverySurvey::$statusName[$this->status];
    }
    public function getStatusWithSymbol(){
        $message =  '<i class="';
        if($this->status == 0)
            $message .= "fa fa-edit";
        elseif($this->status == 1)
            $message .="fa fa-commenting";
        elseif($this->status == 2)
            $message .="fa fa-check";
        $message .=' fa-2x"></i> '. $this->getStatusName();
        return $message;
    }
}
