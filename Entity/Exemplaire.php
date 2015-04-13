<?php

namespace Projet\BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exemplaire
 */
class Exemplaire
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $codeRangement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $listemprunts;

    /**
     * @var \Projet\BibliothequeBundle\Entity\Livre
     */
    private $livre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listemprunts = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codeRangement
     *
     * @param string $codeRangement
     * @return Exemplaire
     */
    public function setCodeRangement($codeRangement)
    {
        $this->codeRangement = $codeRangement;

        return $this;
    }

    /**
     * Get codeRangement
     *
     * @return string 
     */
    public function getCodeRangement()
    {
        return $this->codeRangement;
    }

    /**
     * Add listemprunts
     *
     * @param \Projet\BibliothequeBundle\Entity\Emprunt $listemprunts
     * @return Exemplaire
     */
    public function addListemprunt(\Projet\BibliothequeBundle\Entity\Emprunt $listemprunts)
    {
        $this->listemprunts[] = $listemprunts;

        return $this;
    }

    /**
     * Remove listemprunts
     *
     * @param \Projet\BibliothequeBundle\Entity\Emprunt $listemprunts
     */
    public function removeListemprunt(\Projet\BibliothequeBundle\Entity\Emprunt $listemprunts)
    {
        $this->listemprunts->removeElement($listemprunts);
    }

    /**
     * Get listemprunts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListemprunts()
    {
        return $this->listemprunts;
    }

    /**
     * Set livre
     *
     * @param \Projet\BibliothequeBundle\Entity\Livre $livre
     * @return Exemplaire
     */
    public function setLivre(\Projet\BibliothequeBundle\Entity\Livre $livre = null)
    {
        $this->livre = $livre;

        return $this;
    }

    /**
     * Get livre
     *
     * @return \Projet\BibliothequeBundle\Entity\Livre 
     */
    public function getLivre()
    {
        return $this->livre;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $listreservations;


    /**
     * Add listreservations
     *
     * @param \Projet\BibliothequeBundle\Entity\Reservation $listreservations
     * @return Exemplaire
     */
    public function addListreservation(\Projet\BibliothequeBundle\Entity\Reservation $listreservations)
    {
        $this->listreservations[] = $listreservations;

        return $this;
    }

    /**
     * Remove listreservations
     *
     * @param \Projet\BibliothequeBundle\Entity\Reservation $listreservations
     */
    public function removeListreservation(\Projet\BibliothequeBundle\Entity\Reservation $listreservations)
    {
        $this->listreservations->removeElement($listreservations);
    }

    /**
     * Get listreservations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListreservations()
    {
        return $this->listreservations;
    }
}
