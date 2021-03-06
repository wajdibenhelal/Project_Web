<?php

namespace JardinDenfant\ProfilJDBundle\Repository;

/**
 * EvenementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EvenementRepository extends \Doctrine\ORM\EntityRepository
{

    public function findEventsParJardin($ide)
{
    $query=$this->getEntityManager()->createQuery(
        "select m from JardinDenfantProfilJDBundle:Evenement m where m.numauth =:ide ");
    return $query->getResult();
}


public function triEventsByDate( )
{
    $query=$this->getEntityManager()->createQuery(
        "select m from JardinDenfantProfilJDBundle:Evenement m ORDER  by m.start DESC ");
    return $query->getResult();

}




    public function  deleteUsersEventss($ide)
    {
        $query =$this->getEntityManager()->createQuery("select ue from  JardinDenfantProfilJDBundle:UserEvents ue WHERE 
  ue.evenement=:ide
")->setParameter('ide',$ide)->setMaxResults(1);
        return $query->execute();



    }
}

