<?php

namespace Lezgro\Mobd2Bundle\Controller;
use Lezgro\Mobd2Bundle\Entity\Users;
use Lezgro\Mobd2Bundle\Tools\Parser;
use Lezgro\Mobd2Bundle\Tools\Usertools;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{
    /**
     * @Route("/mobd/user")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('LezgroMobd2Bundle:User:index.html.twig');
    }
    
    public function authAction()
    {
        
        return $this->render('LezgroMobd2Bundle:User:auth.html.twig');
      
    }
    
    public function userAction()
    {
        /* Смотрим есть ли у нас юзер в базе */

        //$client = new \Zend_Http_Client();
        
//    $author = new Author();
//    // ... выполняются какие-либо действия с объектом $author
//
//    $validator = $this->get('validator');
//    $errors = $validator->validate($author);
//
//if (count($errors) > 0) {
//    return $this->render('LezgroMobd2Bundle:User:validate.html.twig', array(
//        'errors' => $errors,
//    ));
//} else {
//    // ...
//}
        
//    $author = new Author();
//    // ... выполняются какие-либо действия с объектом $author
//
//    $validator = $this->get('validator');
//    $errors = $validator->validate($author);
       
//
//        $request->isXmlHttpRequest(); // is it an Ajax request?
//
//        $request->getPreferredLanguage(array('en', 'fr'));
//
//        $request->query->get('page'); // get a $_GET parameter
        
      $request = $this->get('request');
      $token = $request->request->get('token'); 
      $fbid = $request->request->get('fbid');
      
      $session = $this->get('request')->getSession();
      $session->set('token', $token);
      $session->set('fbid', $fbid);
      
      $returnArray = $this->getDoctrine()->getRepository('LezgroMobd2Bundle:Users')
                        ->updateUserInfo(array('fbid' => $fbid,'token' => $token));
      
      $content = $this->renderView('LezgroMobd2Bundle:User:user.html.twig', $returnArray);

      return new Response($content);
      
    }
    

}