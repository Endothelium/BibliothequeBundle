<?php

namespace Projet\BibliothequeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 */
class Theme
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $livresT;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->livresT = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set description
     *
     * @param string $description
     * @return Theme
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add livresT
     *
     * @param \Projet\BibliothequeBundle\Entity\Livre $livresT
     * @return Theme
     */
    public function addLivresT(\Projet\BibliothequeBundle\Entity\Livre $livresT)
    {
        $this->livresT[] = $livresT;

        return $this;
    }

    /**
     * Remove livresT
     *
     * @param \Projet\BibliothequeBundle\Entity\Livre $livresT
     */
    public function removeLivresT(\Projet\BibliothequeBundle\Entity\Livre $livresT)
    {
        $this->livresT->removeElement($livresT);
    }

    /**
     * Get livresT
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLivresT()
    {
        return $this->livresT;
    }
}
