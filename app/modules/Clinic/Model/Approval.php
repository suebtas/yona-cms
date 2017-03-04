<?php

namespace Clinic\Model;

class Approval extends \Phalcon\Mvc\Model
{

    static $statusName = ['กำลังกรอกข้อมูล','ตรวจสอบอีกครั้ง','ไม่ผ่าน','ผ่าน'];
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
    public $approve_date;

    /**
     *
     * @var integer
     */
    public $level;

    /**
     *
     * @var integer
     */
    public $order;

    /**
     *
     * @var string
     */
    public $comment;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     *
     * @var integer
     */
    public $discovery_surveyid;

    /**
     *
     * @var integer
     */
    public $admin_userid;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('discovery_surveyid', 'Discovery survey', 'id', array('alias' => 'Discovery survey'));
        $this->belongsTo('sessionid', 'GroupSession', 'id', array('alias' => 'GroupSession'));
        $this->belongsTo('admin_userid', 'Clinic\Model\AdminUser', 'id', array('alias' => 'AdminUser'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'approval';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Approval[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Approval
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public function getStatusName(){
        if($this->status!=null)
            return Approval::$statusName[$this->status];
        else 
            return Approval::$statusName[0];

    }
    //'กำลังกรอกข้อมูล','ตรวจสอบอีกครั้ง','ไม่ผ่าน','ผ่าน'
    public function getStatusWithSymbol($showMessage=true){
        $message =  '<i class="';
        if($this->status == 0)
            $message .= "fa fa-hourglass-start";
        elseif($this->status == 1)
            $message .="fa fa-wrench";
        elseif($this->status == 2)
            $message .="fa fa-close";
        elseif($this->status == 3)
            $message .="fa fa-check";
        $message .=' fa-2x"></i>';        
        if ($showMessage)
            $message .=$this->getStatusName();
        return $message;
    }
}
