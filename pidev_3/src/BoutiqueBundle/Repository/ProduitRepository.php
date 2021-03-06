<?php

namespace BoutiqueBundle\Repository;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends \Doctrine\ORM\EntityRepository
{
    public function findcategorie($categorie,$idf)
    {
//        $query=$this->getEntityManager()->createQuery(
//"select p from BoutiqueBundle:Produit p
//              where p.categorie =categorie AND p.idf = idf")
//->setParameters(array('categorie'=>$categorie,'idf'=>$idf));
//return $query->getResult();

        $query=$this->createQueryBuilder('p');
        $query->where('p.categorie= :cat AND p.idf= :idf');
        $query->setParameters(array('cat'=>$categorie , 'idf'=>$idf));
    }

    public function findAjax($search)
    {/*$date_from = new \DateTime('now');
        ->setParameter('date_from', $date_from)
        ->andWhere('e.datedeb > = :date_form')*/

        return $this->createQueryBuilder('e')
            ->andWhere('e.nom LIKE :nom')
            ->setParameter('nom','%' .$search . '%')
            ->getQuery()
            ->getResult();
    }


}
