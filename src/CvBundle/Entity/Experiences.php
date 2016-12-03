<?php

namespace CvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experiences
 */
class Experiences
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $society;

    /**
     * @var string
     */
    private $dateStart;

    /**
     * @var string
     */
    private $dateFinish;

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
     * Set society
     *
     * @param string $society
     * @return Experiences
     */
    public function setSociety($society)
    {
        $this->society = $society;

        return $this;
    }

    /**
     * Get society
     *
     * @return string 
     */
    public function getSociety()
    {
        return $this->society;
    }

    /**
     * Set dateStart
     *
     * @param string $dateStart
     * @return Experiences
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return string 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateFinish
     *
     * @param string $dateFinish
     * @return Experiences
     */
    public function setDateFinish($dateFinish)
    {
        $this->dateFinish = $dateFinish;

        return $this;
    }

    /**
     * Get dateFinish
     *
     * @return string 
     */
    public function getDateFinish()
    {
        return $this->dateFinish;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Experiences
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
}
