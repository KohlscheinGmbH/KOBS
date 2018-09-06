<?php

namespace App\Repository;

use App\Entity\Grunddaten;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Grunddaten|null find($id, $lockMode = null, $lockVersion = null)
 * @method Grunddaten|null findOneBy(array $criteria, array $orderBy = null)
 * @method Grunddaten[]    findAll()
 * @method Grunddaten[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrunddatenRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Grunddaten::class);
    }

//    /**
//     * @return Grunddaten[] Returns an array of Grunddaten objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Grunddaten
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
