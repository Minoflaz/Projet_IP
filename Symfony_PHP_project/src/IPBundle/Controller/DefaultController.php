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


class DefaultController extends Controller
{
    /**
     * Index
     *
     * @return Response
     */
    public function indexAction()
    {
        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findAll();

        $chapitres = $this->getDoctrine()->getRepository('IPBundle:Chapitre')->findAll();

        return $this->render('IPBundle:Accueil:index.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
            'chapitres' => $chapitres
        ));
    }

    public function deleteCoursAction($coursName)
    {
        $cours = $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneByNom($coursName);

        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($cours);
        $em->flush();

        return new Response("Enlevé le cours");
    }

    /**
     * Temporary account page
     *
     * @return Response
     */
    public function compteAction() {

        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        return $this->render('IPBundle:Progression:compte.html.twig',array(
            'user' => $this->getUser(),
        ));
    }

    /**
     * Exercises
     *
     * @return Response
     */
    public function exercisesAction() {

        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        return $this->render('IPBundle:Exercices:exercises.html.twig',array(
            'user' => $this->getUser(),
        ));
    }

    /**
     * Progression
     *
     * @return Response
     */
    public function progressionAction() {

        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findAll();

        return $this->render('IPBundle:Progression:Progression.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours
        ));
    }

    /**
     * Progression with a specific course
     *
     * @param $id
     * @return Response
     */
    public function progressionCoursAction($id) {

        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findAll();

        $cour = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneById($id);

        return $this->render('IPBundle:Progression:ProgressionCours.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
            'cour' => $cour
        ));
    }

    /**
     * Course consulting
     *
     * @return Response
     *
     */
    public function showAllCoursAction() {

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findAll();

        return $this->render('IPBundle:Cours:showAllCours.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
        ));
    }

    /**
     * Chapter consulting for a specific course
     *
     * @param $id
     * @return Response
     */
    public function showCoursAction($id) {

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneById($id);

        return $this->render('IPBundle:Cours:showCours.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
        ));

    }

    /**
     * Consulting a specific chapter
     *
     * @param $id
     * @return Response
     */
    public function showChapitreAction($id) {

        $chapitre = $this->getDoctrine()->getRepository('IPBundle:Chapitre')->findOneById($id);

        $cours = $chapitre->getCours();


        return $this->render('IPBundle:Cours:showChapitre.html.twig',array(
            'user' => $this->getUser(),
            'cours' => $cours,
            'chapitre' => $chapitre,
        ));

    }
    
    /**
     * Function returning the good mask with a given ip and a given number of sub net
     *
     * @param  string $ipBytes  
     * @param  int $nbSubNet
     * @return Response
     */
    public function giveMaskAction($ipBytes,$nbSubNet) {

        $ip = new IPAdress();

        $ip->setBytes($ipBytes);

        $nbSubNet = intval($nbSubNet);

        $mask = $ip->giveMask($nbSubNet);

        return new Response($mask->getBytes());


    }

    /**
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

        $routingTableLine1->init($ip1,$ip2,$mask,"UH","eth1");
        $routingTableLine2->init($ip1,$ip2,$mask,"UH","eth1");
        $routingTableLine3->init($ip3,$ip2,$mask,"UH","eth1");

        $routingTableGiven->addLine($routingTableLine1);
        $routingTableGiven->addLine($routingTableLine3);

        $routingTablePending->addLine($routingTableLine1);
        $routingTablePending->addLine($routingTableLine2);

        if($routingTableGiven->isSame($routingTablePending))
            $bool = "Les tables sont pareilles";
        else
            $bool = "Les tables sont differentes";

        return new Response($routingTableGiven->toString()."<br /><br />".$routingTablePending->toString()."<br /><br />".$bool);
            
    }**/



}
