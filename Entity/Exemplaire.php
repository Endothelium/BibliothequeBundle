<?php

namespace BibliothequeBundle\Entity;

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
     * @var \BibliothequeBundle\Entity\Livre
     */
    private $livre;


    /**
     * Set livre
     *
     * @param \BibliothequeBundle\Entity\Livre $livre
     * @return Exemplaire
     */
    public function setLivre(\BibliothequeBundle\Entity\Livre $livre = null)
    {
        $this->livre = $livre;

        return $this;
    }

    /**
     * Get livre
     *
     * @return \BibliothequeBundle\Entity\Livre 
     */
    public function getLivre()
    {
        return $this->livre;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $listemprunts;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listemprunts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listemprunts
     *
     * @param \BibliothequeBundle\Entity\Emprunt $listemprunts
     * @return Exemplaire
     */
    public function addListemprunt(\BibliothequeBundle\Entity\Emprunt $listemprunts)
    {
        $this->listemprunts[] = $listemprunts;

        return $this;
    }

    /**
     * Remove listemprunts
     *
     * @param \BibliothequeBundle\Entity\Emprunt $listemprunts
     */
    public function removeListemprunt(\BibliothequeBundle\Entity\Emprunt $listemprunts)
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
}
