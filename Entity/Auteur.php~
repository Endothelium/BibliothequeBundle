<?php

namespace BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 */
class Auteur
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $livresA;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->livresA = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Auteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Auteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Add livresA
     *
     * @param \BibliothequeBundle\Entity\Livre $livresA
     * @return Auteur
     */
    public function addLivresA(\BibliothequeBundle\Entity\Livre $livresA)
    {
        $this->livresA[] = $livresA;

        return $this;
    }

    /**
     * Remove livresA
     *
     * @param \BibliothequeBundle\Entity\Livre $livresA
     */
    public function removeLivresA(\BibliothequeBundle\Entity\Livre $livresA)
    {
        $this->livresA->removeElement($livresA);
    }

    /**
     * Get livresA
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLivresA()
    {
        return $this->livresA;
    }
}
