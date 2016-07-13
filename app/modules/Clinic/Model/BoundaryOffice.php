<?php

namespace Clinic\Model;

class BoundaryOffice extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $close_officeid;

    /**
     *
     * @var integer
     */
    public $boundaryid;

    /**
     *
     * @var integer
     */
    public $owner_officeid;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo('owner_officeid', 'Office', 'id', array('alias' => 'Office'));
        $this->belongsTo('close_officeid', 'Office', 'id', array('alias' => 'Office'));
        $this->belongsTo('boundaryid', 'Boundary', 'id', array('alias' => 'Boundary'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'boundary_office';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return BoundaryOffice[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return BoundaryOffice
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
