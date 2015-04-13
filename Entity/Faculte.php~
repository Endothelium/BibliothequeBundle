<?php

namespace Projet\BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Faculte
 */
class Faculte
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $membresFaculte;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membresFaculte = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set designation
     *
     * @param string $designation
     * @return Faculte
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Add membresFaculte
     *
     * @param \Projet\BibliothequeBundle\Entity\Membre $membresFaculte
     * @return Faculte
     */
    public function addMembresFaculte(\Projet\BibliothequeBundle\Entity\Membre $membresFaculte)
    {
        $this->membresFaculte[] = $membresFaculte;

        return $this;
    }

    /**
     * Remove membresFaculte
     *
     * @param \Projet\BibliothequeBundle\Entity\Membre $membresFaculte
     */
    public function removeMembresFaculte(\Projet\BibliothequeBundle\Entity\Membre $membresFaculte)
    {
        $this->membresFaculte->removeElement($membresFaculte);
    }

    /**
     * Get membresFaculte
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembresFaculte()
    {
        return $this->membresFaculte;
    }
}
