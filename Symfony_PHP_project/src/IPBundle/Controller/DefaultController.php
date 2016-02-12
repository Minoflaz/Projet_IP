<?php

namespace IPBundle\Controller;

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


class DefaultController extends Controller
{
    public function indexAction()
    {
        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneBy(array('nom' => 'Reseau'));

        return $this->render('IPBundle:Accueil:index.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
        ));
    }

    public function exercisesAction() {

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneBy(array('nom' => 'Reseau'));

        return $this->render('IPBundle:Exercices:exercises.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
        ));
    }

    public function progressionAction() {

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findAll();

        return $this->render('IPBundle:Progression:Progression.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours
        ));
    }

    public function showAllCoursAction() {

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findAll();

        return $this->render('IPBundle:Cours:showAllCours.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
        ));
    }

    public function showCoursAction($id) {

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneById($id);

        return $this->render('IPBundle:Cours:showCours.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
        ));

    }

    public function showChapitreAction($id) {

        $chapitre = $this->getDoctrine()->getRepository('IPBundle:Chapitre')->findOneById($id);

        $cours = $chapitre->getCours();


        return $this->render('IPBundle:Cours:showChapitre.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
            'chapitre' => $chapitre,
        ));

    }

    public function newCoursAction(Request $request) {

        $cours = new Cours();

        $form = $this->createFormBuilder($cours)
            ->add('nom','text')
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();

            return $this->render('IPBundle:Cours:LessonSubscriptionSuccess.html.twig');
        }

        return $this->render('IPBundle:Default:testCours.html.twig',array(
                'form' => $form->createView(),
                'user'=> $this->getUser(),
            ));
    }

    public function newChapitreAction(Request $request) {

        $chapitre = new Chapitre();

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findAll();

        $form = $this->createFormBuilder($chapitre)
            ->add('nom','text')
            ->add('text','textarea', array('attr' => array('cols' => '75', 'rows' => '50')))
            ->add('cours','entity' , array('class' => 'IPBundle:Cours', 'choice_label' => 'nom'))
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {

            $chapitre->getCours()->addChapitre($chapitre);
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();

            return $this->render('IPBundle:Cours:ChapterAddSuccess.html.twig',array(
                'user'=> $this->getUser(),
            ));
        }

        return $this->render('IPBundle:Cours:AjoutChapitre.html.twig',array(
                'form' => $form->createView(),
                'user'=> $this->getUser(),
                'cours' => $cours,
            ));

    }


    
    /**
     * Create a new eleve and persist it into the database
     * @param  Request $request 
     */
    public function newEleveAction(Request $request) {

        $eleve = new Eleve();
        $form = $this->createFormBuilder($eleve)
            ->add('nom','text')
            ->add('prenom','text')
            ->add('username','text')
            ->add('password','password')
            ->add('dateNaissance','date',array('years' => range(1950,2015)))
            ->add('sexe','choice',array('choices' => array('male' => 'male', 'female' => 'female')))
            ->add('save','submit')
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($eleve, $eleve->getPassword());
            $eleve->setPassword($encoded);
            $em->persist($eleve);
            $em->flush();

            return $this->render('IPBundle:Inscription:SubscriptionSuccess.html.twig',array(
                'user'=> $this->getUser(),
            ));
        }

        else {
            
        }


        return $this->render('IPBundle:Inscription:inscription.html.twig',array(
                'form' => $form->createView(),
            ));
    }

    /**
     * Exercice dealing with giving the right class to the right IPAdress
     * @param  Request $request 
     */
    public function exoClassAction(Request $request) {

        $session = $this->container->get('session');

        $em = $this->getDoctrine()->getManager();

        $ipAdress = new IPAdress();

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

            if($mask->isSame($ipAdress->giveMask(   $nbSubNet))) { // Si l'éleve réussit l'éxercice

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
     * Function returning the good mask with a given ip and a given number of sub net
     * @param  string $ipBytes  
     * @param  int $nbSubNet           
     */
    public function giveMaskAction($ipBytes,$nbSubNet) {

        $ip = new IPAdress();

        $ip->setBytes($ipBytes);

        $nbSubNet = intval($nbSubNet);

        $mask = $ip->giveMask($nbSubNet);

        return new Response($mask->getBytes());


    }


    public function routingTableAction(Request $request) {
        $bool = "";

        $routingTableGiven = new RoutingTable();
        $routingTablePending = new RoutingTable();

        $ip1 = new IPAdress();
        $ip2 = new IPAdress();
        $ip3 = new IPAdress();
        $ip4 = new IPAdress();

        $mask = new Mask();

        $mask->init("0.0.0.0");

        $ip1->initString("192.168.0.1");
        $ip2->initString("192.168.0.2");
        $ip3->initString("192.168.0.3");
        $ip4->initString("192.168.0.4");

        $routingTableLine1 = new RoutingTableLine($ip1,$ip2,$mask,"UH","eth1");
        $routingTableLine2 = new RoutingTableLine($ip1,$ip2,$mask,"UH","eth1");
        $routingTableLine3 = new RoutingTableLine($ip3,$ip2,$mask,"UH","eth1");

        $routingTableGiven->addLine($routingTableLine1);
        $routingTableGiven->addLine($routingTableLine3);

        $routingTablePending->addLine($routingTableLine1);
        $routingTablePending->addLine($routingTableLine2);

        if($routingTableGiven->isSame($routingTablePending))
            $bool = "Les tables sont pareilles";
        else
            $bool = "Les tables sont differentes";

        return new Response($routingTableGiven->toString()."<br /><br />".$routingTablePending->toString()."<br /><br />".$bool);
            
    }



}
