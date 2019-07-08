<?php

namespace App\Repository;

use App\Entity\Actualités;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Actualités|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actualités|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actualités[]    findAll()
 * @method Actualités[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActualitésRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Actualités::class);
    }

    // /**
    //  * @return Actualités[] Returns an array of Actualités objects
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
