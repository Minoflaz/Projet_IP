<?php

namespace IPBundle\Entity;

use IPBundle\Entity\Exercice;
use IPBundle\Entity\Eleve;

/**
 * Note
 */
class Note
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $valeur;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var Eleve
     */
    private $eleve;

    /**
     * @var Exercice
     */
    private $exercice;

    public function __construct($valeur)
    {
        $this->valeur = $valeur;
        $this->date = new \DateTime();
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
     * Set valeur
     *
     * @param integer $valeur
     *
     * @return Note
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return integer
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Note
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    public function setEleve($eleve) {

        $this->eleve = $eleve;
    }

    public function getEleve() {

        return $this->eleve;
    }
}
