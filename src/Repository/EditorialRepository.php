<?php

namespace App\Repository;

use App\Entity\Editorial;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Editorial|null find($id, $lockMode = null, $lockVersion = null)
 * @method Editorial|null findOneBy(array $criteria, array $orderBy = null)
 * @method Editorial[]    findAll()
 * @method Editorial[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EditorialRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Editorial::class);
    }

    public function conteo(?string $nombre = null)
    {
        $qb = $this->createQueryBuilder('e')
            ->select('count(e.edtNombre)');
        if (!empty($nombre)) {
            $qb->where('e.edtNombre = :nombre')
                ->setParameter('nombre', $nombre);
        }
        return $qb->getQuery()->getSingleScalarResult();;
    }

    public function listado(int $inicio, int $limite)
    {
        return $this->createQueryBuilder('e')
            ->select('e.edtId, e.edtNombre, e.edtCodigo, e.edtDireccion, e.edtTelefono, p.paiNombre')
            ->innerJoin('e.paiId', 'p')
            ->setMaxResults($limite)
            ->setFirstResult($inicio)
            ->orderBy('e.edtId', 'ASC')
            ->getQuery()
            ->getArrayResult();
    }

    // /**
    //  * @return Editorial[] Returns an array of Editorial objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Editorial
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
