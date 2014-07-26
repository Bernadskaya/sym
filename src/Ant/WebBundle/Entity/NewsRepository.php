<?php
/**
 * Created by JetBrains PhpStorm.
 * User: nataliabernadskaya
 * Date: 26.07.14
 * Time: 18:57
 * To change this template use File | Settings | File Templates.
 */

namespace Ant\WebBundle\Entity;

use Doctrine\ORM\EntityRepository;

class NewsRepository extends EntityRepository {

    public function findAll(){
        return $this->findBy(array(), array('created'=>'DESC'));

    }

    public function findOther($id){
        $dql = "SELECT n FROM AntWebBundle:News n WHERE n.id != ?1 ORDER BY n.created DESC";
        return $this->getEntityManager()->createQuery($dql)
            ->setParameter(1, $id)
            ->getResult();    }
}