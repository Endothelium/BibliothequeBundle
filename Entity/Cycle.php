<?php

namespace BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cycle
 */
class Cycle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $nbJours;

    /**
     * @var integer
     */
    private $nbLivres;


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
     * Set nbJours
     *
     * @param integer $nbJours
     * @return Cycle
     */
    public function setNbJours($nbJours)
    {
        $this->nbJours = $nbJours;

        return $this;
    }

    /**
     * Get nbJours
     *
     * @return integer 
     */
    public function getNbJours()
    {
        return $this->nbJours;
    }

    /**
     * Set nbLivres
     *
     * @param integer $nbLivres
     * @return Cycle
     */
    public function setNbLivres($nbLivres)
    {
        $this->nbLivres = $nbLivres;

        return $this;
    }

    /**
     * Get nbLivres
     *
     * @return integer 
     */
    public function getNbLivres()
    {
        return $this->nbLivres;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $membres;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add membres
     *
     * @param \BibliothequeBundle\Entity\Membre $membres
     * @return Cycle
     */
    public function addMembre(\BibliothequeBundle\Entity\Membre $membres)
    {
        $this->membres[] = $membres;

        return $this;
    }

    /**
     * Remove membres
     *
     * @param \BibliothequeBundle\Entity\Membre $membres
     */
    public function removeMembre(\BibliothequeBundle\Entity\Membre $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }
}
