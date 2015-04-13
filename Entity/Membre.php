<?php

namespace Projet\BibliothequeBundle\Entity;

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
    private $username;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reservations;

    /**
     * @var \Projet\BibliothequeBundle\Entity\Faculte
     */
    private $faculte;

    /**
     * @var \Projet\BibliothequeBundle\Entity\Cycle
     */
    private $cycle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->emprunts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set username
     *
     * @param string $username
     * @return Membre
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
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
     * @param \Projet\BibliothequeBundle\Entity\Emprunt $emprunts
     * @return Membre
     */
    public function addEmprunt(\Projet\BibliothequeBundle\Entity\Emprunt $emprunts)
    {
        $this->emprunts[] = $emprunts;

        return $this;
    }

    /**
     * Remove emprunts
     *
     * @param \Projet\BibliothequeBundle\Entity\Emprunt $emprunts
     */
    public function removeEmprunt(\Projet\BibliothequeBundle\Entity\Emprunt $emprunts)
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
     * Add reservations
     *
     * @param \Projet\BibliothequeBundle\Entity\Reservation $reservations
     * @return Membre
     */
    public function addReservation(\Projet\BibliothequeBundle\Entity\Reservation $reservations)
    {
        $this->reservations[] = $reservations;

        return $this;
    }

    /**
     * Remove reservations
     *
     * @param \Projet\BibliothequeBundle\Entity\Reservation $reservations
     */
    public function removeReservation(\Projet\BibliothequeBundle\Entity\Reservation $reservations)
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
     * Set faculte
     *
     * @param \Projet\BibliothequeBundle\Entity\Faculte $faculte
     * @return Membre
     */
    public function setFaculte(\Projet\BibliothequeBundle\Entity\Faculte $faculte = null)
    {
        $this->faculte = $faculte;

        return $this;
    }

    /**
     * Get faculte
     *
     * @return \Projet\BibliothequeBundle\Entity\Faculte 
     */
    public function getFaculte()
    {
        return $this->faculte;
    }

    /**
     * Set cycle
     *
     * @param \Projet\BibliothequeBundle\Entity\Cycle $cycle
     * @return Membre
     */
    public function setCycle(\Projet\BibliothequeBundle\Entity\Cycle $cycle = null)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return \Projet\BibliothequeBundle\Entity\Cycle 
     */
    public function getCycle()
    {
        return $this->cycle;
    }
	
	public function getSalt() {
        return '';  // sel vide !
    }
	
    public function getRoles() {
        return array('ROLE_MEM'); // pas de rôle pour l'instant
    }
	
    public function eraseCredentials() { }
	
    public function serialize() {
        return serialize(array( $this->id, $this->username, $this->password));
    }
	
    public function unserialize($serialized) {
        list( $this->id, $this->username, $this->password) = unserialize($serialized);
    }
}
