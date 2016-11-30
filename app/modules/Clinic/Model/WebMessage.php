<?php

namespace Clinic\Model;

//use Clinic\Model\News;
use Clinic\Model\WebMessage;

class WebMessage extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
    public $subject;
    public $detail;
    public $datesent;
    public $name;
    public $email;
    public $tel;

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
        return 'webmessage';
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
    
    public function getStatus()
    {
        return $this->status;
    }

    
    
}
