<?php

namespace Lezgro\Mobd2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lezgro\Mobd2Bundle\Entity\Relevans
 *
 * @ORM\Table(name="relevans")
 * @ORM\Entity
 */
class Relevans
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
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="friendid", referencedColumnName="id")
     * })
     */
    private $friendid;

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
     * Set friendid
     *
     * @param Lezgro\Mobd2Bundle\Entity\Users $friendid
     * @return Relevans
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
     * Set userid
     *
     * @param Lezgro\Mobd2Bundle\Entity\Users $userid
     * @return Relevans
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