<?php

namespace IPBundle\Controller;

use IPBundle\Entity\Eleve;
use IPBundle\Entity\Note;
use IPBundle\Entity\Exercice;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DatabaseController extends Controller
{

	/**
     * Displays a list of every student in the database
     *
	 * @return Response
	 */
	public function showAllEleveAction() {

		$eleves = $this->getDoctrine()->getRepository('IPBundle:Eleve')->findAll();

		$affichage = "Nom des eleves : ";

		foreach ($eleves as $eleve) {
			$affichage .= $eleve->getUsername()."  id : ".$eleve->getId()." Notes : ";

			foreach($eleve->getNotes() as $note) {

                $affichage .= $note->getValeur()." "    ;
            }
		}

		return new Response($affichage);

	}

    /**
     * Add a specific mark for a specific course to the current user
     *
     * @param $valeur
     * @param $cours
     * @return Response
     */
	public function addNoteEleveAction($valeur,$cours) {  // A terme le paramètre "valeur" deviendra une note

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneBy(array('nom' => $cours));

        $note = new Note($valeur,$cours);

		$em = $this->getDoctrine()->getManager();

		$eleve = $this->getUser();
		$eleve->addNote($note);  // Ajoute a ses notes la note passée en paramètrea l'indice "nombre de notes"

		$em->persist($note);
		$em->flush();

		return new Response("Note de ".$valeur." ajoutée à ".$eleve->getPrenom());

	}

    /**
     * Displays a list of every mark a student with the specified name has
     *
     * @param $prenom
     * @return Response
     */
	public function showNotesEleveAction($prenom) {

		$eleve = $this->getDoctrine()->getRepository('IPBundle:Eleve')->findOneByPrenom($prenom);
		$notesRecup = $eleve->getNotes();

		$affichage ="Notes de ".$eleve->getPrenom()." : ";

		foreach ($notesRecup as $note) {

			$date = $note->getDate()->format('Y/m/d'); 
			$affichage .= "note : ".$note->getValeur()." date : ".$date." | ";
		}

		return new Response($affichage);

	}

    /**
     * Displays every marks in the database for a specific course
     *
     * @param $cours
     * @return Response
     */
    public function showNotesCoursAction($cours) {

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneBy(array('nom' => $cours));

        $affichage = "Notes pour le cours de ".$cours->getNom()." : ";

        foreach($cours->getNotes() as $notes) {

            $affichage .= $notes->getValeur()." ";
        }

        return new Response($affichage);
    }

    /**
     * Displays a list of every course in the database
     *
     * @return Response
     */
	public function showListeCoursAction() {

		$cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findAll();

		$affichage = "Liste cours : ";

		foreach($cours as $cour ) {

			$affichage .= " - ".$cour->getNom();
		}

		return new Response($affichage);
	}

    /**
     * Get a JSonResponse containing an array of every mark in the database
     *
     * @return JsonResponse
     * @throws \Exception
     */
	public function recupNotesAction() {

		if($this->getUser() != null) {
            $eleve = $this->getDoctrine()->getRepository('IPBundle:Eleve')->findOneById($this->getUser()->getId());
            $notes = $eleve->getNotes();
        }
		else
			$notes = array();

		$res = new JsonResponse();
        $res->setData($notes);

        dump($notes);

        return $res;
	}

























}	