<?php

namespace Lezgro\Mobd2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lezgro\Mobd2Bundle\Entity\Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity
 */
class Events
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string $foto
     *
     * @ORM\Column(name="foto", type="string", length=50, nullable=true)
     */
    private $foto;

    /**
     * @var string $descr
     *
     * @ORM\Column(name="descr", type="text", nullable=true)
     */
    private $descr;

    /**
     * @var \DateTime $data
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var float $price
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;

    /**
     * @var string $place
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;



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
     * Set title
     *
     * @param string $title
     * @return Events
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Events
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    
        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set descr
     *
     * @param string $descr
     * @return Events
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
    
        return $this;
    }

    /**
     * Get descr
     *
     * @return string 
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Events
     */
    public function setData($data)
    {
        $this->data = $data;
    
        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Events
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set place
     *
     * @param string $place
     * @return Events
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }
}