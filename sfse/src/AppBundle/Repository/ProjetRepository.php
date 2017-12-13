<?php

namespace AppBundle\Repository;

/**
 * ProjetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjetRepository extends \Doctrine\ORM\EntityRepository
{

  /**
  *[]getOpenedProjects description]
  *@return [type] [description]
  */

  public function getOpenedProjects()
  {
    return $this->createQueryBuilder('p')
                    ->where('p.dateEnd >= :date')
                    ->setParameter('date', new \Datetime);
  }
}
