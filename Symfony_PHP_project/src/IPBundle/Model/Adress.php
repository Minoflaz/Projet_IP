<?php

namespace IPBundle\Model;

class Adress 
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $bytes;

  
    public function __construct($str) {

        $this->bytes = $str;

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

    public function setAlea() {

        $alea = array();

        for($i=0;$i<4;$i++) {
            $alea[] = rand(0,255);
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
                $this->bytes.strval($arrayOfInteger[i]).".";
            else
                $this->bytes.strval($arrayOfInteger[i]);

        }

    }

    /**
     * Get byte Int
     *
     * @return int
     */
    public function getByteInt($index)
    {
       $ipAdress = explode(".",$this->bytes);

       return intval($ipAdress[index]);
    }

    /**
     * Get bytes Int
     *
     * @return array
     */
    public function getBytesInt($index)
    {
       
       $ipAdressInt = $array();

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
     * Get the Ip Adress in binary
     * @return string
     */
    public function getBytesBin() {

        $strBin = "";

        for($i=0:$i<4;$i++) {
            if($i<3)
                $strBin.$this->getByteBin($i).".";
            else
                $strBin.$this->getByteBin($i)
        }

    }

    /**
     * Get a byte
     *
     * @return string
     */
    public function getByte($index)
    {
       $ipAdress = explode(".",$this->bytes);

       return $ipAdress[index];
    }

    /**
     * Compare two ip adresses
     * @param  IPAdress  $ipAdress 
     * @return boolean
     */
    public function isSame($ipAdress) 
    {
        if(strcmp($ipAdress->getBytes(),$this->getBytes()) == 0)
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

    /**
    * IPAdress class
    *
    * @return string 
    *
    * Get the class of the IP Adress depending on its first Byte
    */
    public function getClasse() {

        $octet1 = $this->getByteInt(0);

        if($this->checkValable()) {

            if($octet1>=1 && $octet1<=127)
                return "A";

            if($octet1>=128 && $octet1<=191) 
                return "B";

            if($octet1>=192 && $octet1<=223)
                return "C";
            
            if($octet1>=224 && $octet1<=255)
                return "D";
        }

        return 0;

   }

   
}

