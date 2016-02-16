<?php

namespace IPBundle\Model;

abstract class Adress 
{

    /**
     * @var string
     */
    private $bytes;

    /**
     * Set bytes
     *
     * @param string $bytes
     *
     * @return IPadress
     */
    public function setbytes($bytes)
    {
        $this->bytes = $bytes;

        return $this;
    }

    public function setAlea($maxClass) {

        $alea = array();

        for($i=0;$i<4;$i++) {
            if(i==0)
                $alea[] = rand(1,$maxClass);
            $alea[] = rand(1,253);
        }

        $this->init($alea);
       
    }

    /**
     * Get bytes
     *
     * @return string
     */
    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     *  init
     *
     *  Allows you to initialize an IP Adress with a given array of integer
     */
    public function init($arrayOfInteger)
    {
        $this->bytes = "";

        for($i=0;$i<4;$i++) {

            if($i<3)
                $this->bytes = $this->bytes.strval($arrayOfInteger[$i]).".";
            else
                $this->bytes = $this->bytes.strval($arrayOfInteger[$i]);

        }

    }

    public function initStr($arrayOfString) {

        $this->bytes = "";

        for($i=0;$i<4;$i++) {

            if($i<3)
                $this->bytes = $this->bytes.$arrayOfString[$i].".";
            else
                $this->bytes = $this->bytes.$arrayOfString[$i];

        }

    }

    /**
     * Get byte Int
     *
     * @param  int $index 
     *
     * @return int
     */
    public function getByteInt($index)
    {
       $ipAdress = explode(".",$this->bytes);

       return $ipAdress[$index];
    }

    /**
     * Get bytes Int
     *
     * @return array
     */
    public function getBytesInt()
    {
       
       $ipAdressInt = array();

       for($i=0;$i<4;$i++) {

            $ipAdressInt[] = $this->getByteInt($i);

       }

       return $ipAdressInt;

    }

    /**
     * Get the wanted byte in binary
     * @param  int $index 
     * @return string
     */
    public function getByteBin($index) {

        return decbin(intval($this->getByte($index)));
    }

    /**
     * Get the wanted byte in hexa
     * @param $index
     * @return string
     */
    public function getByteHex($index) {

        return dechex(intval($this->getByte($index)));
    }

    /**
     * Get the Ip Adress in binary
     * @return string
     */
    public function getBytesBin() {

        $strBin = "";

        for($i=0;$i<4;$i++) {
            if($i<3)
                $strBin.=$this->getByteBin($i).".";
            else
                $strBin.=$this->getByteBin($i);
        }
        return $strBin;
    }

    /**
     * Get the Ip Adress in hexadecimal
     * @return string
     */
    public function getBytesHex(){

        $strHex = "";

        for($i=0;$i<4;$i++) {
            if($i<3)
                $strHex.=$this->getByteHex($i).".";
            else
                $strHex.=$this->getByteHex($i);
        }
        return $strHex;

    }

    /**
     * Get a byte
     *
     * @return string
     */
    public function getByte($index)
    {
       $ipAdress = explode(".",$this->bytes);

       return $ipAdress[$index];
    }

    /**
     * Compare two adresses
     * @param  Adress  $adress 
     * @return boolean
     */
    public function isSame($adress) 
    {
        if(strcmp($adress->getBytes(),$this->getBytes()) == 0)
            return true;
        else
            return false;
    }  

    /**
     * Checks if the IPAdress is correct
     * @return boolean
     */
    public function checkValable(){

        $arrayInt = $this->getBytesInt();

        for($i=1;$i<4;$i++) {

            if($arrayInt[$i]>255 || $arrayInt[$i]<0)
                return false;
        }

        return true;

    }
   
}

