<?php

namespace IPBundle\Model;

use IPBundle\Model\Mask;

class IPAdress extends Adress
{

     private $class;


    /**
     * Set the class
     * @param string $class 
     * @return  IPAdress 
     */
    public function setClass($class) {

        $this->class = $class;

        return $this;
    }

    /**
     * Get the class
     * @return string
     */
    public function getClass() {

        return $this->class;
    }

    /**
    * IPAdress class
    *
    * @return string
    *
    * Get the class of the IP Adress depending on its first Byte
    */
    public function giveClass() {

        $byte1 = $this->getByteInt(0);

        if($byte1>=1 && $byte1<=127)
            return "A";

        if($byte1>=128 && $byte1<=191) 
            return "B";

        if($byte1>=192 && $byte1<=223)
            return "C";
        
        if($byte1>=224 && $byte1<=255)
            return "D";

   }


   public function giveMask($ip,$nbSubNet) {

        $nbrBit = 0;  // Nombre de bit a utiliser pour le masque
        $Mbyte = 0;  
        $nbAdresse = 0;  // Nombre d'adresse par sous réseau
        $ipConv = explode(".",$ip);  // Permet de séparer les bytes de l'ip donnée

        $byte1 = intval($ipConv[0]);
        $byte2 = intval($ipConv[1]);
        $byte3 = intval($ipConv[2]);
        $byte4 = intval($ipConv[3]);

        if($this->giveMask() == "A") {  // Pour une IP de classe A

            if($nbSubNet>2)
                $nbrBit = ((int)log($nbSubNet,2)) +1;  //Le nombre de bit utilisé est log2 du nombre de sous reseau +1 pour avoir lentier superieur
            else
                $nbrBit = 1;

            $Mbyte1 = 255; // bytes du masque 
            $Mbyte2 = 0;
            $Mbyte3 = 0;
            $Mbyte4 = 0;

            $nbrBitToTreat = $nbrBit;  // Permet de vérifier le nombre de bit a traiter dans les bytes suivant

            for($i=0;($i<8 && $i<$nbrBit);$i++){

                $Mbyte2 += pow(2,(8-($i+1)));
                $nbrBitToTreat--;
            }

            $nbrBit = $nbrBitToTreat;
            
            for($i=0;($i<8 && $i<$nbrBitToTreat);$i++){

                $Mbyte3 += pow(2,(8-($i+1)));
                $nbrBit--;
            }
             
            $nbrBitToTreat = $nbrBit;  
           
            for($i=0;($i<8 && $i<$nbrBitToTreat);$i++){

                $Mbyte4 += pow(2,(8-($i+1)));
                $nbrBit--;
            }
                
            

        }
        if($byte1>=128 && $byte1<=191) {  // Pour une IP de classe B

            $classe = 'B';

            if($nbSubNet>2)
                $nbrBit = ((int)log($nbSubNet,2)) +1;
            else
                $nbrBit = 1;

            $Mbyte1 = 255;
            $Mbyte2 = 255;
            $Mbyte3 = 0;
            $Mbyte4 = 0;

            $nbrBitToTreat = $nbrBit;

            for($i=0;($i<8 && $i<$nbrBit);$i++){

                $Mbyte3 += pow(2,(8-($i+1)));
                $nbrBitToTreat--;
            }

            $nbrBit = $nbrBitToTreat;

            for($i=0;($i<8 && $i<$nbrBitToTreat);$i++){

                $Mbyte4 += pow(2,(8-($i+1)));
                $nbrBit--;
            }

             


        }
        if($byte1>=192 && $byte1<=223) {  // Pour une IP de classe C

            $classe = 'C';

            if($nbSubNet>2)
                $nbrBit = ((int)log($nbSubNet,2)) +1;
            else
                $nbrBit = 1;

            $Mbyte1 = 255;
            $Mbyte2 = 255;
            $Mbyte3 = 255;
            $Mbyte4 = 0;

           for($i=0;($i<8 && $i<$nbrBit);$i++){

                $Mbyte4 += pow(2,(8-($i+1)));
                $nbrBit--;
            }

            
            
            
        }

        $tabMbyte = array($Mbyte1,$Mbyte2,$Mbyte3,$Mbyte4);

        $maskReturned = new Mask();

        $maskReturned->init($tabMbyte);

        return $maskReturned;
    }
}
