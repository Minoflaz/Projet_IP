<?php

namespace IPBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cours
 */
class Cours
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var array
     */
    private $chapitres;

    /**
     * @var array
     */
    private $notes;



    public function __construct() {

        $this->chapitres = new ArrayCollection();
        $this->notes = new ArrayCollection();


    }

    /**
     * @return array
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param array $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Cours
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    public function getChapitres() {

        return $this->chapitres;
    }

    public function setChapitres($chapitres) {

        $this->chapitres = $chapitres;

        return $this;
    }

    public function addChapitre($chapitre) {

        $chapitre->setCours($this);
        $this->chapitres[] = $chapitre;

        return $this;
    }

    public function addNote($note) {

        $note->setCours($this);
        $this->notes[] = $note;

        return $this;
    }
}

