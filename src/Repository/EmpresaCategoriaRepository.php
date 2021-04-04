<?php

namespace App\Repository;

use App\Entity\EmpresaCategoria;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EmpresaCategoria|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmpresaCategoria|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmpresaCategoria[]    findAll()
 * @method EmpresaCategoria[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpresaCategoriaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmpresaCategoria::class);
    }

    // /**
    //  * @return EmpresaCategoria[] Returns an array of EmpresaCategoria objects
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
    public function findOneBySomeField($value): ?EmpresaCategoria
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
