<?php

namespace IPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
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

            return $this->render('IPBundle:Default:SubscriptionSuccess.html.twig');
        }

        else {
            
        }


        return $this->render('IPBundle:Default:testAffichage.html.twig',array(
                'form' => $form->createView(),
            ));
    }

    public function exoClassAction(Request $request) {

        $request = $this->get('request');
        $cookies = $request->cookies;
        $ipAdress = new IPAdress();


        if($cookies->has('ip')) 
            $ipAdress->setBytes($cookies->get('ip'));

        else {

            $ipAdress->setAlea();

            $cookieIp = new Cookie('ip',$ipAdress->getBytes(),(time() + 3600 * 48));

            $reponse = new Response();

            $reponse->headers->setCookie($cookieIp);     

            $reponse->send(); 

        }  

        $form = $this->createFormBuilder($ipAdress)
            ->add('class','text')
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            $reponse = new Response();
            $reponse->headers->clearCookie('ip'); 
            $reponse->send();

            if( (strtoupper( $ipAdress->getClass())) == ($ipAdress->giveClass())  ) // strtoupper allows to compare properly
                return $this->render('IPBundle:Default:taskSuccess.html.twig');
            else
                return $this->render('IPBundle:Default:taskFailed.html.twig');
      
        }

        return $this->render('IPBundle:Default:exoClass.html.twig',array(
                'form' => $form->createView(),
                'ip' => $ipAdress,
            ));

    }

    public function exoMaskAction(Request $request) {

        $request = $this->get('request');
        $cookies = $request->cookies;
        $ipAdress = new IPAdress();
        $mask = new Mask();
        $nbSubNet = "";


        if($cookies->has('ip')) 
            $ipAdress->setBytes($cookies->get('ip'));
        if($cookies->has('mask'))
            $mask->setBytes($cookies->get('mask'));
        if($cookies->has('nbSubNet'))
            $nbSubNet = $cookies->get('nbSubNet');


        else {

            $ipAdress->setAlea();

            $nbSubNet = strval(rand(2,255));

            $cookieIp = new Cookie('ip',$ipAdress->getBytes(),(time() + 3600 * 48));

            $cookieMask = new Cookie('mask',$mask->getBytes(),(time() + 3600 * 48));

            $cookieNbSubNet = new Cookie('nbSubNet',$nbSubNet,(time() + 3600 * 48));

            $reponse = new Response();

            $reponse->headers->setCookie($cookieIp);

            $reponse->headers->setCookie($cookieMask);

            $reponse->headers->setCookie($cookieNbSubNet);

            $reponse->send(); 

        }

        $form = $this->createFormBuilder($mask)
            ->add('bytes','text')
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            $reponse = new Response();
            $reponse->headers->clearCookie('ip');
            $reponse->headers->clearCookie('mask'); 
            $reponse->headers->clearCookie('nbSubNet');
            $reponse->send();

            if($mask->isSame($ipAdress->giveMask($ipAdress,$nbSubNet)))
                return $this->render('IPBundle:Default:maskSuccess.html.twig');
            else
                return $this->render('IPBundle:Default:maskFailed.html.twig');

        }


        return $this->render('IPBundle:Default:exoMask.html.twig',array(
                'form' => $form->createView(),
                'ip' => $ipAdress,
                'mask' => $mask,
                'nbSubNet' => $nbSubNet,
            ));

    }
    
    public function giveMaskAction($ipBytes,$nbSubNet) {

        $ip = new IPAdress();

        $ip->setBytes($ipBytes);

        $mask = $ip->giveMask(intval($nbSubNet));

        return new Response($mask->getBytes());


    }



}
