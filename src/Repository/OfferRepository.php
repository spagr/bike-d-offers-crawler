<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Offer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Offer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Offer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Offer[]    findAll()
 * @method Offer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfferRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $managerRegistry)
	{
		parent::__construct($managerRegistry, Offer::class);
	}

	// /**
	//  * @return Offer[] Returns an array of Offer objects
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
	public function findOneBySomeField($value): ?Offer
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
