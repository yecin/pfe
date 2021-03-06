<?php

namespace BO\OccasionBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends \Doctrine\ORM\EntityRepository
{

    public function getAdvert()
    {
        /*$qb = $this
          ->createQueryBuilder('a');
        $query = $queryBuilder->getQuery();
        $results = $query->getResult();
        return $results;*/

        return $this
        ->createQueryBuilder('a')
        ->getQuery()
        ->getResult()  ;
    }
 
    public function getForAdvert()
    {
        $qb = $this->createQueryBuilder('ad');
        $qb->orderBy('ad.datecreate', 'DESC');
        $qb->setMaxResults(4);
        return $qb->getQuery()
                   ->getResult();
    }
    
    public function myAdvert($id)
    {
        $qb = $this->createQueryBuilder('a');
        $qb
        ->innerJoin('a.categories', 'c')
        ->addSelect('c')
        ;
        $qb->where($qb->expr()->in('a.id', $id));
        /*return $qb
        ->getQuery()
        ->getResult()
        ;*/
        return $qb->getSingleResult();
    }
    
    public function getAdvertWithUser($id)

    {
        $qb = $this
          ->createQueryBuilder('a')
          ->leftJoin('a.user', 'c')
          ->addSelect('c')
          ->where('c.id=:id') 
          ->setParameter('id', $id)
        ;
        return $qb
          ->getQuery()
          //->getResult()
          ->getOneOrNullResult()
        ;
    }

    public function getAdvertForCategory($category)

    {
        switch ($category) { 
        case 'mobiles' : $category=1; 
         break; 
        case 'electromenagers' : $category=2; 
         break; 
        case 'cuisine' : $category=3; 
         break; 
        case 'loisirs' : $category=4; 
         break;
        case 'vetements' : $category=5; 
         break; 
        case 'jardin' : $category=6; 
         break; 
        case 'autres' : $category=7; 
         break; 
        case 'meubles' : $category=8;
         break;
        case 'beaute' : $category=9; 
         break; 
        case 'bebe' : $category=10;
         break;             
        }
        return  $this->createQueryBuilder('a')
        ->leftjoin('a.user', 'us')
        ->leftJoin('a.category', 'cat')       
        ->addSelect('us')
        ->addSelect('cat')
        ->where('a.category = :category')
        ->setParameter('category', $category)
        ->getQuery()
        ->getResult();
    }
    
    public function oneAdvert($id)
    {
        return  $this->createQueryBuilder('a')
        ->leftjoin('a.user', 'us')
        ->leftJoin('a.category', 'cat')       
        ->addSelect('us')
        ->addSelect('cat')
        ->where('a.id = :id')
        ->setParameter('id', $id)
        ->getQuery()
        ->getSingleResult();
    }

    public function updateNbView($id)
    {
        return $this->createQueryBuilder('a')
            ->update()
            ->set('a.nbview', 'a.nbview+1')
            ->where('a.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function getMylistAdvert($id)

    {
        $qb = $this->createQueryBuilder('a');
        $qb->where('a.user = :user')
            ->setParameter('user', $id)
            ->orderBy('a.datecreate', 'DESC')
        ;
        return $qb
        ->getQuery()
        ->getResult()
          ;
        /*
         * code pour pagination
        $query = $this->createQueryBuilder('a');
        $query->where('a.customer = :customer')
            ->setParameter('customer', $id)
            ->orderBy('a.datecreate', 'DESC')
            ->getQuery()
        ;
        $query
                ->setFirstResult(($page-1) * $nbPerPage)
                ->setMaxResults($nbPerPage)
        ;
        return new Paginator($query, true);
         */
    }

    
}
