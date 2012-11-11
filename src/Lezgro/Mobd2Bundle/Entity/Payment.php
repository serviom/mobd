<?php

namespace Lezgro\Mobd2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lezgro\Mobd2Bundle\Entity\Payment
 *
 * @ORM\Table(name="payment")
 * @ORM\Entity
 */
class Payment
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
     * @var float $summa
     *
     * @ORM\Column(name="summa", type="float", nullable=true)
     */
    private $summa;

    /**
     * @var \DateTime $data
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string $hash
     *
     * @ORM\Column(name="hash", type="string", length=100, nullable=true)
     */
    private $hash;

    /**
     * @var boolean $confirm
     *
     * @ORM\Column(name="confirm", type="boolean", nullable=true)
     */
    private $confirm;

    /**
     * @var Events
     *
     * @ORM\ManyToOne(targetEntity="Events")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="eventid", referencedColumnName="id")
     * })
     */
    private $eventid;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="id")
     * })
     */
    private $userid;



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
     * Set summa
     *
     * @param float $summa
     * @return Payment
     */
    public function setSumma($summa)
    {
        $this->summa = $summa;
    
        return $this;
    }

    /**
     * Get summa
     *
     * @return float 
     */
    public function getSumma()
    {
        return $this->summa;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     * @return Payment
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
     * Set hash
     *
     * @param string $hash
     * @return Payment
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    
        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set confirm
     *
     * @param boolean $confirm
     * @return Payment
     */
    public function setConfirm($confirm)
    {
        $this->confirm = $confirm;
    
        return $this;
    }

    /**
     * Get confirm
     *
     * @return boolean 
     */
    public function getConfirm()
    {
        return $this->confirm;
    }

    /**
     * Set eventid
     *
     * @param Lezgro\Mobd2Bundle\Entity\Events $eventid
     * @return Payment
     */
    public function setEventid(\Lezgro\Mobd2Bundle\Entity\Events $eventid = null)
    {
        $this->eventid = $eventid;
    
        return $this;
    }

    /**
     * Get eventid
     *
     * @return Lezgro\Mobd2Bundle\Entity\Events 
     */
    public function getEventid()
    {
        return $this->eventid;
    }

    /**
     * Set userid
     *
     * @param Lezgro\Mobd2Bundle\Entity\Users $userid
     * @return Payment
     */
    public function setUserid(\Lezgro\Mobd2Bundle\Entity\Users $userid = null)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return Lezgro\Mobd2Bundle\Entity\Users 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}