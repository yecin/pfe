<?php

namespace BO\OccasionBundle\Repository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    
        public function nameToId($name)
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('BOOccasionBundle:Category')
      ;
      return $repository->findOneByX($name);
    }
}
