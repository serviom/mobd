<?php

namespace Lezgro\Mobd2Bundle\Tools;
use Lezgro\Mobd2Bundle\Entity\Users;
class Usertools
{

    /**
     * Add user in base
     * @param array $userInfo 
     * @return void
     */
    static public function addUser($userInfo)
    {
        $users = new Users();  
        if(array_key_exists('name', $userInfo)) {
            $users->setName($userInfo['name']);
        }
        if(array_key_exists('username', $userInfo)) {
            $users->setUsername($userInfo['username']);
        }
        if(array_key_exists('last_name', $userInfo)) {
            $users->setLastName($userInfo['last_name']);
        }
        if(array_key_exists('first_name', $userInfo)) {
            $users->setFirstName($userInfo['first_name']);
        }
        if(array_key_exists('birthday', $userInfo)) {
            $users->setBirthday($userInfo['birthday']);
        }
        if(array_key_exists('id', $userInfo)) {
            $users->setFbid($userInfo['id']);
        }
        if(array_key_exists('email', $userInfo)) {
            $users->setEmail($userInfo['email']);
        }

        return $users;
        
       // $doctrine = $users->getDoctrine()->getEntityManager();
       // $doctrine->persist($users);
       // $doctrine->flush();
        
//        $validator = $this->get('validator');
//        $errors = $validator->validate($users);
        
//        if (count($errors) > 0) {
//            return $this->render('LezgroMobd2Bundle:User:validate.html.twig', array(
//                        'errors' => $errors,
//                    ));
//        } else {
//
//        }
    }
    
    static public function updateFriend($idUser,$idFriend) {
        $relevans = $this->get('doctrine')
                         ->getRepository('LezgroMobd2Bundle:Relevans');
        $friend = $relevans->findOneBy(array('userid' => $idUser, 'friendid' => $idFriend));
    }
   
    
    /**
     * User in base
     *
     * @return bool
     */
    public function getUserInBase($fbid) {
        $user = $this->get('doctrine')
              ->getEntityManager()
              ->getRepository('LezgroMobd2Bundle:Users')
              ->find((int)$fbid);
        if(!$user) {
            return false;
        } else {
            return true;
        }
    }

}



