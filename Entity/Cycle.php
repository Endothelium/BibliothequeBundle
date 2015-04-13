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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $membresCycle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membresCycle = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add membresCycle
     *
     * @param \BibliothequeBundle\Entity\Membre $membresCycle
     * @return Cycle
     */
    public function addMembresCycle(\BibliothequeBundle\Entity\Membre $membresCycle)
    {
        $this->membresCycle[] = $membresCycle;

        return $this;
    }

    /**
     * Remove membresCycle
     *
     * @param \BibliothequeBundle\Entity\Membre $membresCycle
     */
    public function removeMembresCycle(\BibliothequeBundle\Entity\Membre $membresCycle)
    {
        $this->membresCycle->removeElement($membresCycle);
    }

    /**
     * Get membresCycle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembresCycle()
    {
        return $this->membresCycle;
    }
}
