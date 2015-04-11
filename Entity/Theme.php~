<?php

namespace BibliothequeBundle\Entity;

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
     * Add livresT
     *
     * @param \BibliothequeBundle\Entity\Livre $livresT
     * @return Theme
     */
    public function addLivresT(\BibliothequeBundle\Entity\Livre $livresT)
    {
        $this->livresT[] = $livresT;

        return $this;
    }

    /**
     * Remove livresT
     *
     * @param \BibliothequeBundle\Entity\Livre $livresT
     */
    public function removeLivresT(\BibliothequeBundle\Entity\Livre $livresT)
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
