<?php

namespace IPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use IPBundle\Entity\Eleve;
use IPBundle\Entity\Note;
use IPBundle\Model\Adress;
use IPBundle\Model\IPAdress;
use IPBundle\Model\Mask;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IPBundle:Default:index.html.twig', array('name' => $name));
    }


    public function exoMaskAction(Request $request) {

        $givenMask = new Mask();
        $rightMask = new Mask();
        $rightMask->setOctets($givenMask->giveMask("192.168.1.1",20));
        $nbSubNet = 20;

        $form = $this->createFormBuilder($givenMask)
            ->add('octets','text')
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) { //code en cours d'édition avec l'entity mask

            

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

    public function exoClassAction(Request $request) {

        $ipAdress = new IPAdress();

        $ipAdress->setAlea();

        $form = $this->createFormBuilder($ipAdress)
            ->add('class','text')
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            if( strcmp( strtoupper( $ipAdress->getClass() ),( $ipAdress->giveClass() ) ) == 0 ) // strtoupper allows to compare properly
                return $this->render('IPBundle:Default:taskSuccess.html.twig');
            else
                return $this->render('IPBundle:Default:maskFailed.html.twig');
       
        }

        return $this->render('IPBundle:Default:exoClass.html.twig',array(
                'form' => $form->createView(),
            ));

    }
}
