<?php

namespace Lezgro\Mobd2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lezgro\Mobd2Bundle\Entity\Subscription
 *
 * @ORM\Table(name="subscription")
 * @ORM\Entity
 */
class Subscription
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
     * @var integer $maxfriends
     *
     * @ORM\Column(name="maxfriends", type="integer", nullable=false)
     */
    private $maxfriends;

    /**
     * @var integer $minfriends
     *
     * @ORM\Column(name="minfriends", type="integer", nullable=false)
     */
    private $minfriends;

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
     * Set maxfriends
     *
     * @param integer $maxfriends
     * @return Subscription
     */
    public function setMaxfriends($maxfriends)
    {
        $this->maxfriends = $maxfriends;
    
        return $this;
    }

    /**
     * Get maxfriends
     *
     * @return integer 
     */
    public function getMaxfriends()
    {
        return $this->maxfriends;
    }

    /**
     * Set minfriends
     *
     * @param integer $minfriends
     * @return Subscription
     */
    public function setMinfriends($minfriends)
    {
        $this->minfriends = $minfriends;
    
        return $this;
    }

    /**
     * Get minfriends
     *
     * @return integer 
     */
    public function getMinfriends()
    {
        return $this->minfriends;
    }

    /**
     * Set eventid
     *
     * @param Lezgro\Mobd2Bundle\Entity\Events $eventid
     * @return Subscription
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
     * @return Subscription
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