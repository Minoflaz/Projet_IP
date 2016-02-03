<?php

namespace IPBundle\Controller;

use IPBundle\Entity\Eleve;
use IPBundle\Entity\Note;
use IPBundle\Entity\Exercice;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DatabaseController extends Controller
{

	public function addEleveAction() {

		$em = $this->getDoctrine()->getManager();

		$eleve = new Eleve();

		$em->persist($eleve);
		$em->flush();

		return new Response();

	}	

	public function getEleveAction($id) {

		$eleve = $this->getDoctrine()->getRepository('IPBundle:Eleve')->find($id);

		if (!$eleve) {
			throw $this->createNotFoundException('No product found for id '.$id);
		}

		return new Response($eleve);

	}

	public function showEleveAction($id) {

		$eleve = $this->getDoctrine()->getRepository('IPBundle:Eleve')->find($id);

		if (!$eleve) {
			throw $this->createNotFoundException('No product found for id '.$id);
		}

	return new Response($eleve);

	

	}

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

	public function showNotesEleveAction($idEleve) {

		$eleve = $this->getDoctrine()->getRepository('IPBundle:Eleve')->find($idEleve);
		$notesRecup = $eleve->getNotes();

		$affichage ="Notes de ".$eleve->getPrenom()." : ";

		foreach ($notesRecup as $note) {

			$date = $note->getDate()->format('Y/m/d'); 
			$affichage .= "note : ".$note->getValeur()." date : ".$date." | ";
		}

		return new Response($affichage);

	}

    public function showNotesCoursAction($cours) {

        $cours = $this->getDoctrine()->getRepository('IPBundle:Cours')->findOneBy(array('nom' => $cours));

        $affichage = "Notes pour le cours de ".$cours->getNom()." : ";

        foreach($cours->getNotes() as $notes) {

            $affichage .= $notes->getValeur()." ";
        }

        return new Response($affichage);
    }

























}	