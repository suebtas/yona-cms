<?php

namespace Clinic\Model;

//use Clinic\Model\News;
use Clinic\Model\NewsDetail;

class News extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
    public $subject;
    public $detail;
    public $datesent;
    public $newstype;
    public $newslevel;
    public $newsimportant;
    public $status;
    public $adminid;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'news';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Office[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Office
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public function getRead1()
    {
        $readed = NewsDetail::find("newsid = {$this->id} AND level = 1 AND status = 1");
        
        return count($readed);
    }

    public function getRead2()
    {
        $readed = NewsDetail::find("newsid = {$this->id} AND level = 2 AND status = 1");
        
        return count($readed);
    }

    public function getNewsRead1()
    {
        $readnews = NewsDetail::find("newsid = {$this->id} AND level = 1");

        return count($readnews);
    }

    public function getNewsRead2()
    {
        $readnews = NewsDetail::find("newsid = {$this->id} AND level = 2");

        return count($readnews);
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getNameStatus()
    {
        if($this->status == 1)
            return "เผยแพร่";
        else
            return "ระงับ";
    }

    public function getStatusNewsUser($user)
    {
        //die($user);

        $readed = NewsDetail::findFirst("newsid = {$this->id} AND userid = {$user}");

        return $readed->status;
    }

    
}
