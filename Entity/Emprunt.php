<?php

namespace Projet\BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprunt
 */
class Emprunt
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateRetour;

    /**
     * @var \Projet\BibliothequeBundle\Entity\Membre
     */
    private $membreEmp;

    /**
     * @var \Projet\BibliothequeBundle\Entity\Exemplaire
     */
    private $exemplaireEmp;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Emprunt
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     * @return Emprunt
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime 
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set membreEmp
     *
     * @param \Projet\BibliothequeBundle\Entity\Membre $membreEmp
     * @return Emprunt
     */
    public function setMembreEmp(\Projet\BibliothequeBundle\Entity\Membre $membreEmp = null)
    {
        $this->membreEmp = $membreEmp;

        return $this;
    }

    /**
     * Get membreEmp
     *
     * @return \Projet\BibliothequeBundle\Entity\Membre 
     */
    public function getMembreEmp()
    {
        return $this->membreEmp;
    }

    /**
     * Set exemplaireEmp
     *
     * @param \Projet\BibliothequeBundle\Entity\Exemplaire $exemplaireEmp
     * @return Emprunt
     */
    public function setExemplaireEmp(\Projet\BibliothequeBundle\Entity\Exemplaire $exemplaireEmp = null)
    {
        $this->exemplaireEmp = $exemplaireEmp;

        return $this;
    }

    /**
     * Get exemplaireEmp
     *
     * @return \Projet\BibliothequeBundle\Entity\Exemplaire 
     */
    public function getExemplaireEmp()
    {
        return $this->exemplaireEmp;
    }
}
