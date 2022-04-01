<?php

namespace App\Repository;

use App\Entity\SuitePresidentielleGerant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SuitePresidentielleGerant|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuitePresidentielleGerant|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuitePresidentielleGerant[]    findAll()
 * @method SuitePresidentielleGerant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuitePresidentielleGerantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuitePresidentielleGerant::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(SuitePresidentielleGerant $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(SuitePresidentielleGerant $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return SuitePresidentielleGerant[] Returns an array of SuitePresidentielleGerant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SuitePresidentielleGerant
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
