<?php

namespace App\Repository;

use App\Entity\Localidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Localidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Localidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Localidad[]    findAll()
 * @method Localidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocalidadRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Localidad::class);
    }

//    /**
//     * @return Localidad[] Returns an array of Localidad objects
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
    public function findOneBySomeField($value): ?Localidad
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
