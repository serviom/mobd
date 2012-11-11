<?php

namespace Lezgro\MobdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lezgro\MobdBundle\Entity\Friends
 */
class Friends
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $idfacebook
     */
    private $idfacebook;

    /**
     * @var string $emial
     */
    private $emial;


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
     * Set name
     *
     * @param string $name
     * @return Friends
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set idfacebook
     *
     * @param string $idfacebook
     * @return Friends
     */
    public function setIdfacebook($idfacebook)
    {
        $this->idfacebook = $idfacebook;
    
        return $this;
    }

    /**
     * Get idfacebook
     *
     * @return string 
     */
    public function getIdfacebook()
    {
        return $this->idfacebook;
    }

    /**
     * Set emial
     *
     * @param string $emial
     * @return Friends
     */
    public function setEmial($emial)
    {
        $this->emial = $emial;
    
        return $this;
    }

    /**
     * Get emial
     *
     * @return string 
     */
    public function getEmial()
    {
        return $this->emial;
    }
}
