<?php

namespace App\Repository;

use App\Entity\SuiteClassiqueGerant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SuiteClassiqueGerant|null find($id, $lockMode = null, $lockVersion = null)
 * @method SuiteClassiqueGerant|null findOneBy(array $criteria, array $orderBy = null)
 * @method SuiteClassiqueGerant[]    findAll()
 * @method SuiteClassiqueGerant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuiteClassiqueGerantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SuiteClassiqueGerant::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(SuiteClassiqueGerant $entity, bool $flush = true): void
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
    public function remove(SuiteClassiqueGerant $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return SuiteClassiqueGerant[] Returns an array of SuiteClassiqueGerant objects
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
    public function findOneBySomeField($value): ?SuiteClassiqueGerant
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
