<?php

namespace App\Repository;

use App\Entity\Moovies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Moovies|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moovies|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moovies[]    findAll()
 * @method Moovies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MooviesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Moovies::class);
    }

    // /**
    //  * @return Moovies[] Returns an array of Moovies objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Moovies
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
