<?php

namespace Lezgro\MobdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserController extends Controller
{
    /**
     * @Route("/mobd/user")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('LezgroMobdBundle:User:index.html.twig');
    }
    
    public function authAction()
    {
        
        return $this->render('LezgroMobdBundle:User:auth.html.twig');
      
    }
    
    public function migrationAction($name)
    {
        return array('name' => $name);
    }
}