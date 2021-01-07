<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class PhoneBookRepository extends EntityRepository
{
    public function getPhones($id = 0, $name = 0, $offset = 0, $limit = 10)
    {
//        $dql = "SELECT * FROM PhoneBook p ".
//            "WHERE p.id = ':id' and p.firstName LIKE '%:name%'";

        //SELECT p FROM App\Entity\PhoneBook p
        //TODO querin senca grvum ANNAMOT

        return $this->getEntityManager()->createQuery("SELECT p FROM App\Entity\PhoneBook p")
//            ->setParameter('id', $id)
//            ->setParameter('name', $name)
            ->setFirstResult($offset * 10)
            ->setMaxResults($limit)
            ->getResult();
    }
}
