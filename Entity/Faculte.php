<?php

namespace BibliothequeBundle\Entity;

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
     * @return Faculte
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
	
	public function __toString(){
		return $this->id.':'.$this->designation;
	}
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $membresFaculte;


    /**
     * Add membresFaculte
     *
     * @param \BibliothequeBundle\Entity\Membre $membresFaculte
     * @return Faculte
     */
    public function addMembresFaculte(\BibliothequeBundle\Entity\Membre $membresFaculte)
    {
        $this->membresFaculte[] = $membresFaculte;

        return $this;
    }

    /**
     * Remove membresFaculte
     *
     * @param \BibliothequeBundle\Entity\Membre $membresFaculte
     */
    public function removeMembresFaculte(\BibliothequeBundle\Entity\Membre $membresFaculte)
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
