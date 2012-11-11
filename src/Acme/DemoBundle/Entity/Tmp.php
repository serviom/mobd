<?php

namespace Acme\DemoBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\DemoBundle\Entity\Tmp
 * @ORM\Table(name="tmp")
 */
class Tmp
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
    
       
}

