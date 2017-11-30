<?php

namespace Clinic\Model;

class DiscoverySurvey extends \Phalcon\Mvc\Model
{

    static $statusName = ['อยู่ระหว่างสำรวจ','พิจารณาปรับแก้ข้อมูล','แจ้งให้หัวหน้ายืนยัน','สำรวจสำเร็จ'];
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
     *
     * @var string
     */
    public $enddate;
    /**
     *
     * @var string
     */
    public $signing_surveyor;
    /**
     *
     * @var string
     */
    public $signing_approver;
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

    public function getApprovals($parameters = null)
    {
        return $this->getRelated("Approval", $parameters);
    }

    public function getAnswers($parameters = null)
    {
        return $this->getRelated("Answer", $parameters);
    }

    public function getComments($parameters = null)
    {
        return $this->getRelated("Comment", $parameters);
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


    public function getApprovalStatusWithSymbol($parameters = null, $showMessage = true)
    {
        $approval = $this->getApproval($parameters);
        $message = "";
        if($approval!=null)
            $message = $approval->getStatusWithSymbol($showMessage);
        else if($showMessage)
            $message = "กำลังตรวจสอบข้อมูล";
        return $message;
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
    public function getStatusWithSymbol($showMessage=true){
        $message =  '<i class="';
        if($this->status == 0)
            $message .= "fa fa-edit";
        elseif($this->status == 1)
            $message .="fa fa-warning";
        elseif($this->status == 2)
            $message .="fa fa-institution";
        elseif($this->status == 3)
            $message .="fa fa-check";
        $message .=' fa-2x"></i> ';
        if ($showMessage)
         $message .= $this->getStatusName();
        return $message;
    }

    public function getEndDate()
    {
        return $this->enddate;
    }
    public function isExpired()
    {
        $now = new \DateTime(); // Today
        //echo $now->format('d/m/Y'); // echos today! 
        $dateEnd  = new \DateTime($this->getEndDate().'T24:00:00.00Z');

        return  $now->getTimestamp() > $dateEnd->getTimestamp();
    }
    
    public function getStatusWithEndDateSymbol(){
        $message = '<i class="';
        if ($this->isExpired())
            $message .= 'fa fa-lock';
        else 
            $message .= 'fa fa-unlock';
        $message .= ' fa-2x"></i> ';
        //$message .= $this->SurveyStatus->name;
        return $message;
    }
}
