<?php

namespace Clinic\Model;

class BoundaryTambon extends \Phalcon\Mvc\Model
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
    public $close_tambonid;

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
        $this->belongsTo('owner_officeid', 'Clinic\Model\Office', 'id', array('alias' => 'Office'));
        $this->belongsTo('close_tambonid', 'Clinic\Model\Tambon', 'id', array('alias' => 'Tambon'));
        $this->belongsTo('boundaryid', 'Clinic\Model\Boundary', 'id', array('alias' => 'Boundary'));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'boundary_tambon';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return BoundaryTambon[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return BoundaryTambon
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    public static function toArrayCloseTambonID($options = null){
        $returnArray = array();
        $tmp = BoundaryTambon::find($options)->toArray(array('close_tambonid'));
        foreach ($tmp as $key => $value) {
            $returnArray[] = $value["close_tambonid"];
        }
        return $returnArray;
    }
}
