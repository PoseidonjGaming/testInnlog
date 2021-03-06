<?php

namespace App\Repository;

use App\Entity\TypeSortie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeSortie|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeSortie|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeSortie[]    findAll()
 * @method TypeSortie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeSortieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeSortie::class);
    }

    // /**
    //  * @return TypeSortie[] Returns an array of TypeSortie objects
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
    public function findOneBySomeField($value): ?TypeSortie
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findUneSortie($value)
    {
        return $this->createQueryBuilder('p')
            ->Where('p.id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    public function findUneSortieByName($value)
    {
        return $this->createQueryBuilder('p')
            ->Where('p.libelle = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
