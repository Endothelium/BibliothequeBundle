<?php

namespace BibliothequeBundle\Entity;

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
     * @var \BibliothequeBundle\Entity\Membre
     */
    private $reserve;


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
     * Set reserve
     *
     * @param \BibliothequeBundle\Entity\Membre $reserve
     * @return Reservation
     */
    public function setReserve(\BibliothequeBundle\Entity\Membre $reserve = null)
    {
        $this->reserve = $reserve;

        return $this;
    }

    /**
     * Get reserve
     *
     * @return \BibliothequeBundle\Entity\Membre 
     */
    public function getReserve()
    {
        return $this->reserve;
    }
    /**
     * @var \BibliothequeBundle\Entity\Exemplaire
     */
    private $exemplaireRes;


    /**
     * Set exemplaireRes
     *
     * @param \BibliothequeBundle\Entity\Exemplaire $exemplaireRes
     * @return Reservation
     */
    public function setExemplaireRes(\BibliothequeBundle\Entity\Exemplaire $exemplaireRes = null)
    {
        $this->exemplaireRes = $exemplaireRes;

        return $this;
    }

    /**
     * Get exemplaireRes
     *
     * @return \BibliothequeBundle\Entity\Exemplaire 
     */
    public function getExemplaireRes()
    {
        return $this->exemplaireRes;
    }
}
