<?php


namespace IPBundle\Model;


class FourStr
{
    /**
     * @return mixed
     */
    public function getString1()
    {
        return $this->string1;
    }

    /**
     * @return mixed
     */
    public function getString2()
    {
        return $this->string2;
    }

    /**
     * @return mixed
     */
    public function getString3()
    {
        return $this->string3;
    }

    /**
     * @return mixed
     */
    public function getString4()
    {
        return $this->string4;
    }
    private $string1;
    private $string2;
    private $string3;
    private $string4;

    /**
     * @return mixed
     */
    public function getStrings()
    {

        return array($this->string1,$this->string2,$this->string3,$this->string4);
    }

    /**
     * @param mixed $string1
     */
    public function setString1($string1)
    {
        $this->string1 = $string1;
    }

    /**
     * @param mixed $string2
     */
    public function setString2($string2)
    {
        $this->string2 = $string2;
    }

    /**
     * @param mixed $string3
     */
    public function setString3($string3)
    {
        $this->string3 = $string3;
    }

    /**
     * @param mixed $string4
     */
    public function setString4($string4)
    {
        $this->string4 = $string4;
    }




}