<?php

namespace Lezgro\Mobd2Bundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Lezgro\Mobd2Bundle\Entity\Users
 * 
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Lezgro\Mobd2Bundle\Repository\UsersRepository")
 */
class Users
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    
    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string $first_name
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $first_name;

    /**
     * @var string $last_name
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $last_name;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string $fbid
     *
     * @ORM\Column(name="fbid", type="string", length=100, nullable=false)
     */
    private $fbid;
    
    /**
     * @var string $birthday
     *
     * @ORM\Column(name="birthday", type="date", nullable=true)
     */
    private $birthday;
    
   
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
     * @return Users
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
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fbid
     *
     * @param string $fbid
     * @return Users
     */
    public function setFbid($fbid)
    {
        $this->fbid = $fbid;
    
        return $this;
    }

    /**
     * Get fbid
     *
     * @return string 
     */
    public function getFbid()
    {
        return $this->fbid;
    }
    

    /**
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    
        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return Users
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    
        return $this;
    }

    /**
     * Get last_name
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set birthday
     *
     * @param \Date $birthday
     * @return Users
     */
    public function setBirthday($birthday)
    {
        $birthday = date( 'Y-m-d', strtotime($birthday)); 
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return \Date 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
    

    
}

