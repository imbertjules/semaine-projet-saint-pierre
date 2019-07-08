<?php

namespace App\Repository;

use App\Entity\Actualitees;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Actualitees|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actualitees|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actualitees[]    findAll()
 * @method Actualitees[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActualiteesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Actualitees::class);
    }

    // /**
    //  * @return Actualitees[] Returns an array of Actualités objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Actualités
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
