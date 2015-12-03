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

   

    public function exoMaskAction($givenMask) {

        $ipAdress = new IPAdress("192.168.1.1");
        $rightMask = $ipAdress->giveMask("192.168.1.1",20));
                  
            if($givenMask->isSame($rightMask))  // Si le masque donné est égale au bon masque calculé                
                return true;
            
            else 
                return false;
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
    
   
    public function exoClasseAction($classe) {

        $ipAdress = new IPAdress();  

        $form = $this->createFormBuilder($ipAdress)
            ->add()
        
    }




}
