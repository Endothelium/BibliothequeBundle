<?php

namespace Projet\BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateReservation;

    /**
     * @var \Projet\BibliothequeBundle\Entity\Membre
     */
    private $membreRes;

    /**
     * @var \Projet\BibliothequeBundle\Entity\Exemplaire
     */
    private $exemplaireRes;


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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime 
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set membreRes
     *
     * @param \Projet\BibliothequeBundle\Entity\Membre $membreRes
     * @return Reservation
     */
    public function setMembreRes(\Projet\BibliothequeBundle\Entity\Membre $membreRes = null)
    {
        $this->membreRes = $membreRes;

        return $this;
    }

    /**
     * Get membreRes
     *
     * @return \Projet\BibliothequeBundle\Entity\Membre 
     */
    public function getMembreRes()
    {
        return $this->membreRes;
    }

    /**
     * Set exemplaireRes
     *
     * @param \Projet\BibliothequeBundle\Entity\Exemplaire $exemplaireRes
     * @return Reservation
     */
    public function setExemplaireRes(\Projet\BibliothequeBundle\Entity\Exemplaire $exemplaireRes = null)
    {
        $this->exemplaireRes = $exemplaireRes;

        return $this;
    }

    /**
     * Get exemplaireRes
     *
     * @return \Projet\BibliothequeBundle\Entity\Exemplaire 
     */
    public function getExemplaireRes()
    {
        return $this->exemplaireRes;
    }
}
