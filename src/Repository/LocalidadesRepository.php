<?php

namespace App\Repository;

use App\Entity\Localidades;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Localidades|null find($id, $lockMode = null, $lockVersion = null)
 * @method Localidades|null findOneBy(array $criteria, array $orderBy = null)
 * @method Localidades[]    findAll()
 * @method Localidades[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocalidadesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Localidades::class);
    }

//    /**
//     * @return Localidades[] Returns an array of Localidades objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Localidades
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
