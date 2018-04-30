<?php

namespace BoutiqueBundle\Repository;

/**
 * RatingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RatingRepository extends \Doctrine\ORM\EntityRepository
{
    public function avgrating()
    {
        $query=$this->getEntityManager()->createQuery(
            "select c.idproduit, AVG(c.rating)  from BoutiqueBundle:rating c
             Group BY c.idproduit  "
        );
        return $query->getResult();
    }

    public function testrating($idc)
    {
        $query=$this->getEntityManager()->createQuery(
            "select c.idproduit from BoutiqueBundle:rating c
             WHERE c.idc = idc"
        )
            ->setParameter('idc',$idc);

        return $query->getResult();
    }
}
