<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\OfferSource;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method OfferSource|null find($id, $lockMode = null, $lockVersion = null)
 * @method OfferSource|null findOneBy(array $criteria, array $orderBy = null)
 * @method OfferSource[]    findAll()
 * @method OfferSource[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfferSourceRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $managerRegistry)
	{
		parent::__construct($managerRegistry, OfferSource::class);
	}

	// /**
	//  * @return OfferSource[] Returns an array of OfferSource objects
	//  */
	/*
	public function findByExampleField($value)
	{
		return $this->createQueryBuilder('o')
			->andWhere('o.exampleField = :val')
			->setParameter('val', $value)
			->orderBy('o.id', 'ASC')
			->setMaxResults(10)
			->getQuery()
			->getResult()
		;
	}
	*/

	/*
	public function findOneBySomeField($value): ?OfferSource
	{
		return $this->createQueryBuilder('o')
			->andWhere('o.exampleField = :val')
			->setParameter('val', $value)
			->getQuery()
			->getOneOrNullResult()
		;
	}
	*/
}
