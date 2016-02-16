<?php

namespace IPBundle\Controller;

use IPBundle\Model\FourStrings;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use IPBundle\Entity\Eleve;
use IPBundle\Entity\Note;
use IPBundle\Entity\Cours;
use IPBundle\Entity\Chapitre;
use IPBundle\Model\Adress;
use IPBundle\Model\IPAdress;
use IPBundle\Model\Mask;
use IPBundle\Model\RoutingTable;
use IPBundle\Model\RoutingTableLine;
use IPBundle\Model\FourStr;


class ExoController extends Controller
{
    /**
     * Exercice dealing with giving the right class to the right IPAdress
     * @param  Request $request
     */
    public function exoClassAction(Request $request) {

        $session = $this->container->get('session');

        $em = $this->getDoctrine()->getManager();

        $ipAdress = new IPAdress();

        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneBy(array('nom' => 'Class'));

        if($cours == null) {
            $cours = new Cours();
            $cours->setNom("Class");
            $em->persist($cours);
            $em->flush();
        }

        if($session->has('ip'))
            $ipAdress->setbytes($session->get('ip'));

        else {

            $ipAdress->setAlea();

            $session->set('ip',$ipAdress->getBytes());

        }

        $form = $this->createFormBuilder($ipAdress)
            ->add('class','choice',array('choices' => array('A' => 'A', 'B' => 'B', 'C' => 'C,', 'D' => 'D')))
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            $session->remove('ip');

            if( (strtoupper( $ipAdress->getClass())) == ($ipAdress->giveClass())  ) { // strtoupper allows to compare properly

                if($this->getUser() != null){
                    $note = new Note(20,$cours);
                    $this->getUser()->addNote($note);
                    $em->persist($note);
                    $em->flush();
                }


                return $this->render('IPBundle:Exercices:classSuccess.html.twig',array(
                    'user'=> $this->getUser(),

                ));
            }
            else {

                if($this->getUser() != null){
                    $note = new Note(0,$cours);
                    $this->getUser()->addNote($note);
                    $em->persist($note);
                    $em->flush();
                }

                return $this->render('IPBundle:Exercices:classFailed.html.twig',array(
                    'user'=> $this->getUser(),
                    'ip' => $ipAdress,
                    'ipClass' => $ipAdress->giveClass()
                ));

            }
        }

        return $this->render('IPBundle:Exercices:exoClass.html.twig',array(
            'form' => $form->createView(),
            'ip' => $ipAdress,
            'user'=> $this->getUser(),
        ));


    }

    /**
     * Exercice dealing with giving the right mask depending on an Adress and a number of sub network wanted
     * @param  Request $request
     */
    public function exoMaskAction(Request $request) {
        $request = $this->get('request');
        $cookies = $request->cookies;
        $ipAdress = new IPAdress();
        $mask = new Mask();
        $nbSubNet = "";

        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $em = $this->getDoctrine()->getManager();

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneBy(array('nom' => 'Mask'));

        if($cours == null) {
            $cours = new Cours();
            $cours->setNom("Mask");
            $em->persist($cours);
            $em->flush();
        }


        if($cookies->has('ip'))
            $ipAdress->setBytes($cookies->get('ip'));
        if($cookies->has('mask'))
            $mask->setBytes($cookies->get('mask'));
        if($cookies->has('nbSubNet'))
            $nbSubNet = $cookies->get('nbSubNet');


        else {

            $ipAdress->setAlea();

            $nbSubNet = strval(rand(2,80));

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

            if($mask->isSame($ipAdress->giveMask($nbSubNet))) { // Si l'éleve réussit l'éxercice

                if($this->getUser() != null){
                    $note = new Note(20,$cours);
                    $this->getUser()->addNote($note);
                    $em->persist($note);
                    $em->flush();
                }

                return $this->render('IPBundle:Exercices:maskSuccess.html.twig', array(
                    'user' => $this->getUser(),
                ));
            }
            else {

                if($this->getUser() != null){
                    $note = new Note(0,$cours);
                    $this->getUser()->addNote($note);
                    $em->persist($note);
                    $em->flush();
                }

                return $this->render('IPBundle:Exercices:maskFailed.html.twig', array(
                    'user' => $this->getUser(),
                    'mask' => $ipAdress->giveMask($nbSubNet)
                ));
            }

        }


        return $this->render('IPBundle:Exercices:exoMask.html.twig',array(
            'form' => $form->createView(),
            'ip' => $ipAdress,
            'mask' => $mask,
            'nbSubNet' => $nbSubNet,
            'user'=> $this->getUser(),
        ));

    }

    /**
     * Exercise dealing with conversion.
     *
     * It allows the student to give the IP Adress in decimal matching an given IP Adress
     * in binary.
     *
     * @param Request $request
     * @return Response
     */
    public function convertAction(Request $request) {

        $session = $this->container->get('session');

        $ipAdressFourStr = new IPAdress();

        $ipAdress = new IPAdress();

        $fourStr = new FourStr();

        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $em = $this->getDoctrine()->getManager();

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneBy(array('nom' => 'Conversion'));

        if($cours == null) {
            $cours = new Cours();
            $cours->setNom("Conversion");
            $em->persist($cours);
            $em->flush();
        }

        if($session->has('ip'))
            $ipAdress->setbytes($session->get('ip'));

        else {

            $ipAdress->setAlea();

            $session->set('ip',$ipAdress->getBytes());

        }

        $form = $this->createFormBuilder($fourStr)
            ->add('string1','textarea', array('attr' => array('cols' => '3', 'rows' => '1')))
            ->add('string2','textarea', array('attr' => array('cols' => '3', 'rows' => '1')))
            ->add('string3','textarea', array('attr' => array('cols' => '3', 'rows' => '1')))
            ->add('string4','textarea', array('attr' => array('cols' => '3', 'rows' => '1')))
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            $ipAdressFourStr->initStr($fourStr->getStrings());

            $session->remove('ip');

            if($ipAdressFourStr->isSame($ipAdress)) {

                if($this->getUser() != null){
                    $note = new Note(20,$cours);
                    $this->getUser()->addNote($note);
                    $em->persist($note);
                    $em->flush();
                }

                return $this->render('IPBundle:Exercices:convertSuccess.html.twig', array(
                    'ipFourStr' => $ipAdressFourStr,
                    'ip' => $ipAdress->getBytes()
                ));
            }
            else {

                if($this->getUser() != null){
                    $note = new Note(0,$cours);
                    $this->getUser()->addNote($note);
                    $em->persist($note);
                    $em->flush();
                }

                return $this->render('IPBundle:Exercices:convertFailed.html.twig', array(
                    'ipFourStr' => $ipAdressFourStr,
                    'ip' => $ipAdress->getBytes()
                ));
            }
        }

        return $this->render('IPBundle:Exercices:convert.html.twig',array(
            'form' =>$form->createView(),
            'user' => $this->getUser(),
            'ip' => $ipAdress->getBytesBin()

        ));


    }

    /**
     * Exercice dealing with routing tables
     *
     * The goal is to fill blank tables with a given network schema
     *
     * @param Request $request
     * @return Response
     */
    public function routingTableAction(Request $request) {

        $routingTable = new RoutingTable();
        $routingTableLine = new RoutingTableLine();
        $routingTableLine2 = new RoutingTableLine();


        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $form = $this->createFormBuilder($routingTableLine)
            ->add('ip','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('gateway','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('mask','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('flag','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('interface','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('save','submit')
            ->getForm();

        $form2 = $this->createFormBuilder($routingTableLine2)
            ->add('ip','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('gateway','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('mask','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('flag','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('interface','textarea', array('attr' => array('cols' => '15', 'rows' => '1')))
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);
        $form2->handleRequest($request);

        if($form->isValid()) {

        }

        if($form2->isValid()) {

        }


        return $this->render('IPBundle:Exercices:testRoutingTable.html.twig',array(
            'form' => $form->createView(),
            'form2' => $form2->createView(),
            'user' => $this->getUser()
        ));

    }


}
