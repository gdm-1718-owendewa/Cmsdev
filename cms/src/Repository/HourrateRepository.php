<?php

namespace App\Repository;

use App\Entity\Hourrate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Hourrate|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hourrate|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hourrate[]    findAll()
 * @method Hourrate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HourrateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hourrate::class);
    }

    // /**
    //  * @return Hourrate[] Returns an array of Hourrate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hourrate
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
