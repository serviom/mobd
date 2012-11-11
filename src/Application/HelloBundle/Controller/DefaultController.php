<?php

namespace Application\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationHelloBundle:Hello:index.html.twig', array('name' => $name));
    }
}
