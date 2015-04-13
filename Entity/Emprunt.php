<?php

namespace BibliothequeBundle\Entity;

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
     * @var \BibliothequeBundle\Entity\Membre
     */
    private $emprunteur;


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
     * Set emprunteur
     *
     * @param \BibliothequeBundle\Entity\Membre $emprunteur
     * @return Emprunt
     */
    public function setEmprunteur(\BibliothequeBundle\Entity\Membre $emprunteur = null)
    {
        $this->emprunteur = $emprunteur;

        return $this;
    }

    /**
     * Get emprunteur
     *
     * @return \BibliothequeBundle\Entity\Membre 
     */
    public function getEmprunteur()
    {
        return $this->emprunteur;
    }
    /**
     * @var \BibliothequeBundle\Entity\Exemplaire
     */
    private $exemplaireEmp;


    /**
     * Set exemplaireEmp
     *
     * @param \BibliothequeBundle\Entity\Exemplaire $exemplaireEmp
     * @return Emprunt
     */
    public function setExemplaireEmp(\BibliothequeBundle\Entity\Exemplaire $exemplaireEmp = null)
    {
        $this->exemplaireEmp = $exemplaireEmp;

        return $this;
    }

    /**
     * Get exemplaireEmp
     *
     * @return \BibliothequeBundle\Entity\Exemplaire 
     */
    public function getExemplaireEmp()
    {
        return $this->exemplaireEmp;
    }
}
