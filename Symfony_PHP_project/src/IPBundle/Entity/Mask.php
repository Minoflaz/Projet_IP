<?php

namespace IPBundle\Entity;

/**
 * Mask
 */
class Mask
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var array
     */
    private $octets;

    public function __construct() {

        $this->octets = array(0,0,0,0);
    }


    /**
     *  init
     *
     *  Allows you to initialize a mask with a given string matching the "ip" form with 4 numbers separared with 4 dots
     */
    public function init($givenMask)
    {


    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set octets
     *
     * @param array $octets
     *
     * @return Mask
     */
    public function setOctets($octets)
    {
        $this->octets = $octets;

        return $this;
    }

    /**
     * Get octets
     *
     * @return array
     */
    public function getOctets()
    {
        return $this->octets;
    }

    /**
     * Get octet
     *
     * @return int
     */
    public function getOctet($nb)
    {
        if($nb < count($this->octets))
            return $this->octets[$nb];
    }

    public function isSame($Mask) 
    {
        $same = true;

        for($i = 0;$i<4;$i++) {

            $same 
        
        }    

    }
}

