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
        return $this->findBy(array('enabled'=>true), array('created'=>'DESC'));

    }

    public function findLast($max){
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('n')
            ->from('AntWebBundle:News', 'n')
            ->setMaxResults($max)
            ->orderBy('n.created', 'DESC')
        ;

        $query = $qb->getQuery();

        $result = $query->getResult();
        return $result;

    }
    public function findOther($id, $max){

        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('n')
            ->from('AntWebBundle:News', 'n')
            ->setParameter(1, $id)
            ->where('n.id != ?1')
            ->setMaxResults($max)
            ->orderBy('n.id', 'DESC')
        ;

        $query = $qb->getQuery();

        $result = $query->getResult();
        return $result;

    }
}