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


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IPBundle:Default:index.html.twig', array('name' => $name));
    }

    public function giveMaskAction($ip,$nbSubNet) 
    {
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
    	
    	return new Response($tabMoctet);

    }


    public function exoMaskAction(Request $request) {

        $givenMask = new Mask();
        $ip = "192.168.1.1";
        $nbSubNet = 20;

        $form = $this->createFormBuilder($givenMask)
            ->add('mask','text')
            ->add('valider','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            $maskTested = explode(".",($givenMask->getMask()));  // Permet de séparer les octets de l'ip donnée

            $octet1 = intval($maskTested[0]);
            $octet2 = intval($maskTested[1]);
            $octet3 = intval($maskTested[2]);
            $octet4 = intval($maskTested[3]);

            $rightMask = giveMaskAction($ip,$nbSubNet);

            $same = true;

            for($i = 0;$i<4;$i++) {

                $same = ($same && ($maskTested[$i]==$rightMask[$i]));

            }

            if($same == true) {


            }

            else {


            }
        }

        return $this->render('IPBundle:Default:exoMask.html.twig',array(
                'form' => $form->createView(),
            ));

    }


    public function testAffichageAction(Request $request) {

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
