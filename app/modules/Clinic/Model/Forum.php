<?php
namespace Clinic\Model;

class Forum extends \Phalcon\Mvc\Model
{
    static $StatusName = array(
            0 => 'ใช้งาน',
            1 => 'ไม่ใช้งาน'
    );
    /**
     *
     * @var integer
     */
    public $ID;

    /**
     *
     * @var string
     */
    public $Name;

    /**
     *
     * @var string
     */
    public $Status;

    public function getStatusName()
    {
        return Forum::$StatusName[$this->Status];
    }
    
    /**
     * Method to set the value of field ID
     *
     * @param integer $ID
     * @return $this
     */
    public function setId($ID)
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Method to set the value of field Name
     *
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Method to set the value of field Status
     *
     * @param string $Status
     * @return $this
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * Returns the value of field ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->ID;
    }

    /**
     * Returns the value of field Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Returns the value of field Status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

}
