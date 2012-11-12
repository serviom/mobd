<?php

namespace Lezgro\Mobd2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lezgro\Mobd2Bundle\Entity\Relevans
 *
 * @ORM\Table(name="relevans")
 * @ORM\Entity(repositoryClass="Lezgro\Mobd2Bundle\Repository\RelevansRepository")
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
     * @var integer $friendid
     *
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="friends")
     * @ORM\JoinColumn(name="friendid", referencedColumnName="id")
     */
    private $friendid;

    /**
     * @var integer $userid
     *
     * @ORM\Column(name="userid", type="integer", nullable=false)
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
     * @param integer $friendid
     * @return Relevans
     */
    public function setFriendid($friendid)
    {
        $this->friendid = $friendid;
    
        return $this;
    }

    /**
     * Get friendid
     *
     * @return integer
     */
    public function getFriendid()
    {
        return $this->friendid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Relevans
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }
}