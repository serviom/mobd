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
}
