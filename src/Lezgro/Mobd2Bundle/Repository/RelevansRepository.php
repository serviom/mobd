<?php
namespace Lezgro\Mobd2Bundle\Repository;

use Doctrine\ORM\EntityRepository;

class RelevansRepository extends EntityRepository
{
     public function updateFriend($friendId,$userId) {
        $em = $this->getEntityManager(); 
        $relevans = $em->getRepository('LezgroMobd2Bundle:Relevans');
        $relevan = $relevans->findOneBy(array('userid' => $userId, 'friendid' => $friendId));
        if(!$relevan) {
                $tableRelevans = new \Lezgro\Mobd2Bundle\Entity\Relevans();
                $tableRelevans->setFriendid($friendId);
                $tableRelevans->setUserid($userId);
                $em->persist($tableRelevans);
                $em->flush();
        } 
    }
    
    public function getFriends($userId) {
        $query = $this->getEntityManager()
                   ->createQuery('
                    SELECT r,u FROM LezgroMobd2Bundle:Relevans r
                    JOIN r.friendid u
                    WHERE r.userid = :userid')
                    ->setParameter('userid', $userId);
        return  $query->getArrayResult();
    }
}
