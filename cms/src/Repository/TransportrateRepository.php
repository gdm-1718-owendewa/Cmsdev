<?php

namespace App\Repository;

use App\Entity\Transportrate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Transportrate|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transportrate|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transportrate[]    findAll()
 * @method Transportrate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransportrateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transportrate::class);
    }

    // /**
    //  * @return Transportrate[] Returns an array of Transportrate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Transportrate
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
