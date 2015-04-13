<?php

namespace BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 */
class Membre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $identifiant;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $emprunts;

    /**
     * @var \BibliothequeBundle\Entity\Faculte
     */
    private $faculte;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->emprunts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set identifiant
     *
     * @param string $identifiant
     * @return Membre
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string 
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Membre
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Membre
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

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Membre
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Add emprunts
     *
     * @param \BibliothequeBundle\Entity\Emprunt $emprunts
     * @return Membre
     */
    public function addEmprunt(\BibliothequeBundle\Entity\Emprunt $emprunts)
    {
        $this->emprunts[] = $emprunts;

        return $this;
    }

    /**
     * Remove emprunts
     *
     * @param \BibliothequeBundle\Entity\Emprunt $emprunts
     */
    public function removeEmprunt(\BibliothequeBundle\Entity\Emprunt $emprunts)
    {
        $this->emprunts->removeElement($emprunts);
    }

    /**
     * Get emprunts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmprunts()
    {
        return $this->emprunts;
    }

    /**
     * Set faculte
     *
     * @param \BibliothequeBundle\Entity\Faculte $faculte
     * @return Membre
     */
    public function setFaculte(\BibliothequeBundle\Entity\Faculte $faculte = null)
    {
        $this->faculte = $faculte;

        return $this;
    }

    /**
     * Get faculte
     *
     * @return \BibliothequeBundle\Entity\Faculte 
     */
    public function getFaculte()
    {
        return $this->faculte;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reservations;

    /**
     * @var \BibliothequeBundle\Entity\Cycle
     */
    private $cycle;


    /**
     * Add reservations
     *
     * @param \BibliothequeBundle\Entity\Reservation $reservations
     * @return Membre
     */
    public function addReservation(\BibliothequeBundle\Entity\Reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \BibliothequeBundle\Entity\Reservation $reservations
     */
    public function removeReservation(\BibliothequeBundle\Entity\Reservation $reservations)
    {
        $this->reservations->removeElement($reservations);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set cycle
     *
     * @param \BibliothequeBundle\Entity\Cycle $cycle
     * @return Membre
     */
    public function setCycle(\BibliothequeBundle\Entity\Cycle $cycle = null)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return \BibliothequeBundle\Entity\Cycle 
     */
    public function getCycle()
    {
        return $this->cycle;
    }
}
