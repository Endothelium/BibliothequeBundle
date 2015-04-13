<?php

namespace BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 */
class Livre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $notice;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $exemplaires;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $auteurs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->exemplaires = new \Doctrine\Common\Collections\ArrayCollection();
        $this->auteurs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set titre
     *
     * @param string $titre
     * @return Livre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set notice
     *
     * @param string $notice
     * @return Livre
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;

        return $this;
    }

    /**
     * Get notice
     *
     * @return string 
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * Add exemplaires
     *
     * @param \BibliothequeBundle\Entity\Exemplaire $exemplaires
     * @return Livre
     */
    public function addExemplaire(\BibliothequeBundle\Entity\Exemplaire $exemplaires)
    {
        $this->exemplaires[] = $exemplaires;

        return $this;
    }

    /**
     * Remove exemplaires
     *
     * @param \BibliothequeBundle\Entity\Exemplaire $exemplaires
     */
    public function removeExemplaire(\BibliothequeBundle\Entity\Exemplaire $exemplaires)
    {
        $this->exemplaires->removeElement($exemplaires);
    }

    /**
     * Get exemplaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExemplaires()
    {
        return $this->exemplaires;
    }

    /**
     * Add auteurs
     *
     * @param \BibliothequeBundle\Entity\Auteur $auteurs
     * @return Livre
     */
    public function addAuteur(\BibliothequeBundle\Entity\Auteur $auteurs)
    {
        $this->auteurs[] = $auteurs;

        return $this;
    }

    /**
     * Remove auteurs
     *
     * @param \BibliothequeBundle\Entity\Auteur $auteurs
     */
    public function removeAuteur(\BibliothequeBundle\Entity\Auteur $auteurs)
    {
        $this->auteurs->removeElement($auteurs);
    }

    /**
     * Get auteurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuteurs()
    {
        return $this->auteurs;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $themes;


    /**
     * Add themes
     *
     * @param \BibliothequeBundle\Entity\Theme $themes
     * @return Livre
     */
    public function addTheme(\BibliothequeBundle\Entity\Theme $themes)
    {
        $this->themes[] = $themes;

        return $this;
    }

    /**
     * Remove themes
     *
     * @param \BibliothequeBundle\Entity\Theme $themes
     */
    public function removeTheme(\BibliothequeBundle\Entity\Theme $themes)
    {
        $this->themes->removeElement($themes);
    }

    /**
     * Get themes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getThemes()
    {
        return $this->themes;
    }
}
