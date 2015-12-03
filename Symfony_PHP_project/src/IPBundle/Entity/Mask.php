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
     * @var string
     */
    private $bytes;


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
     * Set bytes
     *
     * @param string $bytes
     *
     * @return Mask
     */
    public function setbytes($bytes)
    {
        $this->bytes = $bytes;

        return $this;
    }

    public function setAlea() {

        

        
    }

    /**
     * Get bytes
     *
     * @return string
     */
    public function getbytes()
    {
        return $this->bytes;
    }

    /**
     *  init
     *
     *  Allows you to initialize a mask with a given array of integer
     */
    public function init($arrayOfInteger)
    {
        $this->bytes = "";

        for($i=0;$i<4;$i++) {

            $this->bytes += strval($arrayOfInteger[i]);

        }

    }

    /**
     * Get octet Int
     *
     * @return int
     */
    public function getOctetInt($index)
    {
       $mask = explode(".",$this->bytes);

       return intval($mask[index]);
    }

    /**
     * Get bytes Int
     *
     * @return array
     */
    public function getbytesInt($index)
    {
       $maskStr = explode(".",$this->bytes);

       $maskInt = $array();

       for($i=0;$i<4;$i++) {

            $maskInt[] = intval($maskStr[$i]);

       }

       return $maskInt;

    }

    /**
     * Get octet
     *
     * @return string
     */
    public function getOctet($index)
    {
       $mask = explode(".",$this->bytes);

       return $mask[index];
    }

    public function isSame($Mask) 
    {
        if(strcmp($Mask->getbytes(),$this->getbytes()) == 0)
            return true;
        else
            return false;
    }  
           
   
    
}

