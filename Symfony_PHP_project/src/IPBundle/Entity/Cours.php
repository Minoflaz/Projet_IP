<?php

namespace IPBundle\Entity;

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

    public function __construct() {

        $this->chapitres = new ArrayCollection();

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
}

