<?php

namespace Clinic\Model;

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
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany('id', 'AdminUser', 'officeid', array('alias' => 'AdminUser'));
        $this->hasMany('id', 'BoundaryOffice', 'owner_officeid', array('alias' => 'BoundaryOffice'));
        $this->hasMany('id', 'BoundaryOffice', 'close_officeid', array('alias' => 'BoundaryOffice'));
        $this->hasMany('id', 'DiscoverySurvey', 'officeid', array('alias' => 'DiscoverySurvey'));
        $this->belongsTo('amphurid', 'Amphur', 'id', array('alias' => 'Amphur'));
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

}
