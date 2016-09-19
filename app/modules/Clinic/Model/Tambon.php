<?php

namespace Clinic\Model;

use Clinic\Model\Amphur;
class Tambon extends \Phalcon\Mvc\Model
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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'Clinic\Model\AdminUser', 'tambonid', array('alias' => 'AdminUser'));
        $this->hasMany('id', 'Clinic\Model\BoundaryTambon', 'owner_officeid', array('alias' => 'BoundaryTambon'));
        $this->hasMany('id', 'Clinic\Model\BoundaryTambon', 'close_tambonid', array('alias' => 'BoundaryTambon'));
        $this->belongsTo('amphurid', 'Clinic\Model\Amphur', 'id', array('alias' => 'Amphur'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tambon';
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
}
