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


class CreateController extends Controller
{

    /**
     * Create a new course and persist it into the database
     *
     * @param Request $request
     * @return Response
     */
    public function newCoursAction(Request $request) {

        $this->denyAccessUnlessGranted('ROLE_PROF', null, 'Il faut être professeur pour pouvoir ajouter un cours !');

        $listeCours = $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findAll();

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

        return $this->render('IPBundle:Cours:AjoutCours.html.twig',array(
            'form' => $form->createView(),
            'user'=> $this->getUser(),
            'cours'=> $listeCours
        ));
    }

    /**
     * Create a new chapter and persist it into the database
     *
     * @param Request $request
     * @return Response
     */
    public function newChapitreAction(Request $request) {

        $this->denyAccessUnlessGranted('ROLE_PROF', null, 'Il faut être professeur pour pouvoir ajouter un chapitre !');

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
     *
     * @param Request $request
     * @return Response
     */
    public function newEleveAction(Request $request) {

        $eleve = new Eleve();
        $eleve->setRoles(array('ROLE_PROF'));
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
}
