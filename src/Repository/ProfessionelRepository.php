<?php

namespace App\Repository;

use App\Entity\Professionel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Professionel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Professionel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Professionel[]    findAll()
 * @method Professionel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfessionelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Professionel::class);
    }

    // /**
    //  * @return Professionel[] Returns an array of Professionel objects
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
    public function findOneBySomeField($value): ?Professionel
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
