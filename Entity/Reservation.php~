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
     * @var \BibliothequeBundle\Entity\Membre
     */
    private $membre;


    /**
     * Set membre
     *
     * @param \BibliothequeBundle\Entity\Membre $membre
     * @return Reservation
     */
    public function setMembre(\BibliothequeBundle\Entity\Membre $membre = null)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \BibliothequeBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->membre;
    }
    /**
     * @var \BibliothequeBundle\Entity\Membre
     */
    private $reserve;


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
}
