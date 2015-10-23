<?php
/**
 * Created by PhpStorm.
 * User: nevada
 * Date: 07.01.14
 * Time: 14:39
 */


namespace Ant\WebBundle\Entity;

use Doctrine\ORM\EntityRepository;


class AdRepository extends EntityRepository{

    public function findByAdGroup($id)
    {
        return $this->findBy(array('active' => true, 'adGroup'=>$id), array('position'=>'ASC'));
    }

    public function findActiveGroup()

    {
        return $this->findBy(array('active' => true), array('position'=>'ASC'));

    }
    public function findAllActive()

    {
        return $this->findBy(array('active' => true), array('position'=>'ASC'));

    }

}