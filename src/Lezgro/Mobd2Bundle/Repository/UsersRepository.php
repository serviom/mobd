<?php

namespace Lezgro\Mobd2Bundle\Repository;
use Doctrine\ORM\EntityRepository;

class UsersRepository extends EntityRepository
{

    /**
     * Update user info in base
     * @param array $param 
     * @return void
     */
    public function updateUserInfo($param)
    {
        $parser = new \Lezgro\Mobd2Bundle\Tools\Parser($param);
        $userInfo = $parser->getUserInfo();
        print_r($userInfo);
        $userId = $this->_checkUserInBase($userInfo['id']);
        if(!$userId) {
            // insert user
            $userId = $this->_addUser($userInfo);
        }
        // update friends
        $arrayFriends = $parser->getUserFriends();
        foreach($arrayFriends as $friend) {
            //check friend in base
            $friendId = $this->_checkUserInBase($friend['id']);

            if (!$friendId) {
                $friendId = $this->_addUser($friend);
            }
            $em = $this->getEntityManager();    
            $em->getRepository('LezgroMobd2Bundle:Relevans')
                    ->updateFriend($friendId,$userId);            
        }
        
        return array('userInfo' => $userInfo,'friendsInfo' => $arrayFriends);

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


    /**
     * Set keys in object user
     * 
     * @param array $userInfo
     * @param object $users
     * @return object
     */
    private function _setFields($userInfo, $users)
    {
        if (array_key_exists('name', $userInfo)) {
            $users->setName($userInfo['name']);
        }
        if (array_key_exists('username', $userInfo)) {
            $users->setUsername($userInfo['username']);
        }
        if (array_key_exists('last_name', $userInfo)) {
            $users->setLastName($userInfo['last_name']);
        }
        if (array_key_exists('first_name', $userInfo)) {
            $users->setFirstName($userInfo['first_name']);
        }
//        if (array_key_exists('birthday', $userInfo)) {
//            $users->setBirthday($userInfo['birthday']);
//        }
        if (array_key_exists('id', $userInfo)) {
            $users->setFbid($userInfo['id']);
        }
        if (array_key_exists('email', $userInfo)) {
            $users->setEmail($userInfo['email']);
        }
        return $users;
    }


    /**
     * Check user in base
     *
     * @return bool
     */
    private function _checkUserInBase($fbid)
    {
        $em = $this->getEntityManager();
        $user = $em->getRepository('LezgroMobd2Bundle:Users')
                ->findOneBy(array('fbid' => $fbid));
        if (!$user) {
            return false;
        } else {
            return $user->getId();
        }
    }


    /**
     * Add user in base
     *
     * @return bool
     */
    private function _addUser($userInfo)
    {
        $users = new \Lezgro\Mobd2Bundle\Entity\Users();
        $users = $this->_setFields($userInfo, $users);
        $em = $this->getEntityManager();
        $em->persist($users);
        $em->flush();
        return $users->getId();
    }
}
