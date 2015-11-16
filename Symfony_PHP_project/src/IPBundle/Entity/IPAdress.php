<?php

namespace IPBundle\Entity;

/**
 * IPAdress
 *
 * @return string
 *
 * Get the class of the IP Adress depending on its first Byte
 *
 *
 *
 *
 */
class IPAdress extends Mask
{
    public function getClasse() {

        $octet1 = $this->getOctetInt(0);

        if($octet1>=1 && $octet1<=127)
            return "A";

        if($octet1>=128 && $octet1<=191) 
            return "B";

        if($octet1>=192 && $octet1<=223)
            return "C";
        
        if($octet1>=224 && $octet1<=255)
            return "D";

   }
}

