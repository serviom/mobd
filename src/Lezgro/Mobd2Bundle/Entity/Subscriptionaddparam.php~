<?php

namespace Lezgro\Mobd2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lezgro\Mobd2Bundle\Entity\Subscriptionaddparam
 *
 * @ORM\Table(name="subscriptionaddparam")
 * @ORM\Entity
 */
class Subscriptionaddparam
{
    /**
     * @var boolean $payment
     *
     * @ORM\Column(name="payment", type="boolean", nullable=false)
     */
    private $payment;

    /**
     * @var boolean $spot
     *
     * @ORM\Column(name="spot", type="boolean", nullable=false)
     */
    private $spot;

    /**
     * @var boolean $reported
     *
     * @ORM\Column(name="reported", type="boolean", nullable=false)
     */
    private $reported;

    /**
     * @var string $typeinvite
     *
     * @ORM\Column(name="typeinvite", type="string", length=10, nullable=false)
     */
    private $typeinvite;

    /**
     * @var boolean $presence
     *
     * @ORM\Column(name="presence", type="boolean", nullable=false)
     */
    private $presence;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="friendid", referencedColumnName="id")
     * })
     */
    private $friendid;

    /**
     * @var Subscription
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Subscription")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subscriptionid", referencedColumnName="id")
     * })
     */
    private $subscriptionid;



    /**
     * Set payment
     *
     * @param boolean $payment
     * @return Subscriptionaddparam
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    
        return $this;
    }

    /**
     * Get payment
     *
     * @return boolean 
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set spot
     *
     * @param boolean $spot
     * @return Subscriptionaddparam
     */
    public function setSpot($spot)
    {
        $this->spot = $spot;
    
        return $this;
    }

    /**
     * Get spot
     *
     * @return boolean 
     */
    public function getSpot()
    {
        return $this->spot;
    }

    /**
     * Set reported
     *
     * @param boolean $reported
     * @return Subscriptionaddparam
     */
    public function setReported($reported)
    {
        $this->reported = $reported;
    
        return $this;
    }

    /**
     * Get reported
     *
     * @return boolean 
     */
    public function getReported()
    {
        return $this->reported;
    }

    /**
     * Set typeinvite
     *
     * @param string $typeinvite
     * @return Subscriptionaddparam
     */
    public function setTypeinvite($typeinvite)
    {
        $this->typeinvite = $typeinvite;
    
        return $this;
    }

    /**
     * Get typeinvite
     *
     * @return string 
     */
    public function getTypeinvite()
    {
        return $this->typeinvite;
    }

    /**
     * Set presence
     *
     * @param boolean $presence
     * @return Subscriptionaddparam
     */
    public function setPresence($presence)
    {
        $this->presence = $presence;
    
        return $this;
    }

    /**
     * Get presence
     *
     * @return boolean 
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * Set friendid
     *
     * @param Lezgro\Mobd2Bundle\Entity\Users $friendid
     * @return Subscriptionaddparam
     */
    public function setFriendid(\Lezgro\Mobd2Bundle\Entity\Users $friendid = null)
    {
        $this->friendid = $friendid;
    
        return $this;
    }

    /**
     * Get friendid
     *
     * @return Lezgro\Mobd2Bundle\Entity\Users 
     */
    public function getFriendid()
    {
        return $this->friendid;
    }

    /**
     * Set subscriptionid
     *
     * @param Lezgro\Mobd2Bundle\Entity\Subscription $subscriptionid
     * @return Subscriptionaddparam
     */
    public function setSubscriptionid(\Lezgro\Mobd2Bundle\Entity\Subscription $subscriptionid)
    {
        $this->subscriptionid = $subscriptionid;
    
        return $this;
    }

    /**
     * Get subscriptionid
     *
     * @return Lezgro\Mobd2Bundle\Entity\Subscription 
     */
    public function getSubscriptionid()
    {
        return $this->subscriptionid;
    }
}