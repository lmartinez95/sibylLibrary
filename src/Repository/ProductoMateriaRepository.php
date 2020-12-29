<?php

namespace App\Repository;

use App\Entity\Productomateria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Productomateria|null find($id, $lockMode = null, $lockVersion = null)
 * @method Productomateria|null findOneBy(array $criteria, array $orderBy = null)
 * @method Productomateria[]    findAll()
 * @method Productomateria[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductoMateriaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Productomateria::class);
    }

    // /**
    //  * @return Productomateria[] Returns an array of Productomateria objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Productomateria
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
