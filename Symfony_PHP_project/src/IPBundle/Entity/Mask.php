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
    private $octets;


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
     * @param string $octets
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
     * @return string
     */
    public function getOctets()
    {
        return $this->octets;
    }

    /**
     *  init
     *
     *  Allows you to initialize a mask with a given array of integer
     */
    public function init($arrayOfInteger)
    {
        $this->octets = "";

        for($i=0;$i<4;$i++) {

            $this->octets += strval($arrayOfInteger[i]);

        }

    }

    /**
     * Get octet Int
     *
     * @return int
     */
    public function getOctetInt($index)
    {
       $mask = explode(".",$this->octets);

       return intval($mask[index]);
    }

    /**
     * Get octet
     *
     * @return string
     */
    public function getOctet($index)
    {
       $mask = explode(".",$this->octets);

       return $mask[index];
    }

    public function isSame($Mask) 
    {
        if(strcmp($Mask->getOctets(),$this->getOctets()) == 0)
            return true;
        else
            return false;
    }  
           
    public function giveMask($ip,$nbSubNet) {

        $nbrBit = 0;  // Nombre de bit a utiliser pour le masque
        $classe = '';
        $Moctet = 0;  
        $nbAdresse = 0;  // Nombre d'adresse par sous réseau
        $ipConv = explode(".",$ip);  // Permet de séparer les octets de l'ip donnée

        $octet1 = intval($ipConv[0]);
        $octet2 = intval($ipConv[1]);
        $octet3 = intval($ipConv[2]);
        $octet4 = intval($ipConv[3]);

        if($octet1>=1 && $octet1<=127) {  // Pour une IP de classe A

            $classe = 'A';

            if($nbSubNet>2)
                $nbrBit = ((int)log($nbSubNet,2)) +1;  //Le nombre de bit utilisé est log2 du nombre de sous reseau +1 pour avoir lentier superieur
            else
                $nbrBit = 1;

            $Moctet1 = 255; // Octets du masque 
            $Moctet2 = 0;
            $Moctet3 = 0;
            $Moctet4 = 0;

            $nbrBitToTreat = $nbrBit;  // Permet de vérifier le nombre de bit a traiter dans les octets suivant

            for($i=0;($i<8 && $i<$nbrBit);$i++){

                $Moctet2 += pow(2,(8-($i+1)));
                $nbrBitToTreat--;
            }

            $nbrBit = $nbrBitToTreat;
            
            for($i=0;($i<8 && $i<$nbrBitToTreat);$i++){

                $Moctet3 += pow(2,(8-($i+1)));
                $nbrBit--;
            }
             
            $nbrBitToTreat = $nbrBit;  
           
            for($i=0;($i<8 && $i<$nbrBitToTreat);$i++){

                $Moctet4 += pow(2,(8-($i+1)));
                $nbrBit--;
            }
                
            

        }
        if($octet1>=128 && $octet1<=191) {  // Pour une IP de classe B

            $classe = 'B';

            if($nbSubNet>2)
                $nbrBit = ((int)log($nbSubNet,2)) +1;
            else
                $nbrBit = 1;

            $Moctet1 = 255;
            $Moctet2 = 255;
            $Moctet3 = 0;
            $Moctet4 = 0;

            $nbrBitToTreat = $nbrBit;

            for($i=0;($i<8 && $i<$nbrBit);$i++){

                $Moctet3 += pow(2,(8-($i+1)));
                $nbrBitToTreat--;
            }

            $nbrBit = $nbrBitToTreat;

            for($i=0;($i<8 && $i<$nbrBitToTreat);$i++){

                $Moctet4 += pow(2,(8-($i+1)));
                $nbrBit--;
            }

             


        }
        if($octet1>=192 && $octet1<=223) {  // Pour une IP de classe C

            $classe = 'C';

            if($nbSubNet>2)
                $nbrBit = ((int)log($nbSubNet,2)) +1;
            else
                $nbrBit = 1;

            $Moctet1 = 255;
            $Moctet2 = 255;
            $Moctet3 = 255;
            $Moctet4 = 0;

           for($i=0;($i<8 && $i<$nbrBit);$i++){

                $Moctet4 += pow(2,(8-($i+1)));
                $nbrBit--;
            }

            
            
            
        }

        $tabMoctet = array($Moctet1,$Moctet2,$Moctet3,$Moctet4);

        return $tabMoctet;
    }
    
}

