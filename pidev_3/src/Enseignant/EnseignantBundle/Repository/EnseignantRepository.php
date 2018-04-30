<?php

namespace Enseignant\EnseignantBundle\Repository;

/**
 * EnseignantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EnseignantRepository extends \Doctrine\ORM\EntityRepository
{
    function findEnseignant($p)
    {
        $query=$this->getEntityManager()->createQuery(
            "select m from EnseignantEnseignantBundle:Enseignant m WHERE m.nom LIKE :p")->setParameter('p','%'.$p.'%');
        return $query->getResult();

    }

    function Calculer_prix ($id)
    {
        $query=$this->getEntityManager()->createQuery(

            "select m.nbr*m.prix  from  EnseignantEnseignantBundle:Enseignant m
  WHERE m.id = :calculeid" )->setParameter('calculeid', $id);
        return $query->getResult();
    }
}
