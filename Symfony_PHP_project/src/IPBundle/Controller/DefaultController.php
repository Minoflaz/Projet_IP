<?php

namespace IPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use IPBundle\Entity\Eleve;
use IPBundle\Entity\Note;
use IPBundle\Entity\Exercice;
use IPBundle\Entity\Mask;
use IPBundle\Entity\IPAdress;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IPBundle:Default:index.html.twig', array('name' => $name));
    }

    /** give Mask Action
     *
     * @param string $ip
     *
     * @param int $nbSubNet
     *
     * @return array
     *
     * Return an array of  4 integers representing 4 Bytes of a mask constructed with the ip and the number 
     * of Sub Network passed in paramaters.
     *
     */
    public function giveMaskAction($ip,$nbSubNet) 
    {
    	$nbrBit = 0;  // Nombre de bit a utiliser pour le masque
        $classe = '';
        $Moctet = 0;  
        $nbAdresse = 0;  // Nombre d'adresse par sous réseau   	

    	if($ip->getClasse() == "A") {  // Pour une IP de classe A

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
    	if($ip->getClasse() == "B") {  // Pour une IP de classe B

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
    	if($ip->getClasse() == "C") {  // Pour une IP de classe C

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
    	
    	return new Response($tabMoctet);

    }


    public function exoMaskAction(Request $request) {

        $givenMask = new Mask();
        $rightMask = new Mask();
        $rightMask->setOctets($givenMask->giveMask("192.168.1.1",20));
        $nbSubNet = 20;

        $form = $this->createFormBuilder($givenMask)
            ->add('octets','text')
            ->add('valider','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) { code en cours d'édition avec l'entity mask

            

            if($givenMask->isSame()) {  // Si le masque donné est égale au bon masque calculé
                
                return $this->render('IPBundle:Default:maskSuccess.html.twig');

            }

            else {

                return $this->render('IPBundle:Default:maskFailed.html.twig');

            }
        }

        return $this->render('IPBundle:Default:exoMask.html.twig',array(
                'form' => $form->createView(),
            ));

    }


    public function newEleveAction(Request $request) {

        $eleve = new Eleve();

        $form = $this->createFormBuilder($eleve)
            ->add('nom','text')
            ->add('prenom','text')
            ->add('login','text')
            ->add('password','text')
            ->add('dateNaissance','date')
            ->add('sexe','text')
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($eleve);
            $em->flush();

            return $this->render('IPBundle:Default:taskSuccess.html.twig');
        }

        else {
            
        }


        return $this->render('IPBundle:Default:testAffichage.html.twig',array(
                'form' => $form->createView(),
            ));
    }
}
