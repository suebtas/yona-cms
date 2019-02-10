<?php

namespace Clinic\Model;

use Clinic\Model\Amphur;
class Office extends \Phalcon\Mvc\Model
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
    public $name;

    /**
     *
     * @var integer
     */
    public $amphurid;

    /**
     *
     * @var blob
     */
    public $map;

    /**
     *
     * @var string
     */
    public $maptype;

    /**
     *
     * @var string
     */
    public $mapsize;

    /**
     *
     * @var int
     */
    public $_order;
    public $active;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Clinic\Model\AdminUser', 'officeid', array('alias' => 'AdminUser'));
        $this->hasMany('id', 'Clinic\Model\BoundaryOffice', 'owner_officeid', array('alias' => 'BoundaryOffice'));
        $this->hasMany('id', 'Clinic\Model\BoundaryOffice', 'close_officeid', array('alias' => 'BoundaryOffice'));
        $this->hasMany('id', 'Clinic\Model\DiscoverySurvey', 'officeid', array('alias' => 'DiscoverySurvey'));
        $this->belongsTo('amphurid', 'Clinic\Model\Amphur', 'id', array('alias' => 'Amphur'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'office';
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

    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getAmphur()
    {
        return $this->amphurid;
    }

    public function setAmphur($amphurid)
    {
        $this->amphurid = $amphurid;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setOrder($order)
    {
        $this->_order = $order;
    }
    public function getOrder()
    {
        return $this->_order;
    }
}
