<?php

namespace IPBundle\Model;

class IPAdress extends Adress
{

	private $class;

	/**
    * IPAdress class
    *
    * @return string 
    *
    * Get the class of the IP Adress depending on its first Byte
    */
    public function initClasse() {

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

   /**
    * Give the subnet mask with a given number of subnet and an ip adress
    * @param  [type] $ip       
    * @param  [type] $nbSubNet 
    * @return Mask       
    */
   public function giveMask($ip,$nbSubNet) {

        $nbrBit = 0;  // Nombre de bit a utiliser pour le masque
        $classe = '';
        $Moctet = 0;  
        $nbAdresse = 0;  // Nombre d'adresse par sous réseau
        $ipConv = explode(".",$ip);  // Permet de séparer les bytes de l'ip donnée

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

            $Moctet1 = 255; // bytes du masque 
            $Moctet2 = 0;
            $Moctet3 = 0;
            $Moctet4 = 0;

            $nbrBitToTreat = $nbrBit;  // Permet de vérifier le nombre de bit a traiter dans les bytes suivant

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

        $maskReturned = new Mask();

        $maskReturned->init($tabMoctet);

        return $maskReturned;
    }

}