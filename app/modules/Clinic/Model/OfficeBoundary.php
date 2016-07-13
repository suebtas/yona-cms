<?php

namespace Clinic\Model;

class OfficeBoundary extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $officeid;

    /**
     *
     * @var integer
     */
    public $boundaryid;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'office_boundary';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OfficeBoundary[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OfficeBoundary
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
