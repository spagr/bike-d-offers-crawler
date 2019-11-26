<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\BikeModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BikeModel|null find($id, $lockMode = null, $lockVersion = null)
 * @method BikeModel|null findOneBy(array $criteria, array $orderBy = null)
 * @method BikeModel[]    findAll()
 * @method BikeModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BikeModelRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $managerRegistry)
	{
		parent::__construct($managerRegistry, BikeModel::class);
	}

	// /**
	//  * @return BikeModel[] Returns an array of BikeModel objects
	//  */
	/*
	public function findByExampleField($value)
	{
		return $this->createQueryBuilder('b')
			->andWhere('b.exampleField = :val')
			->setParameter('val', $value)
			->orderBy('b.id', 'ASC')
			->setMaxResults(10)
			->getQuery()
			->getResult()
		;
	}
	*/

	/*
	public function findOneBySomeField($value): ?BikeModel
	{
		return $this->createQueryBuilder('b')
			->andWhere('b.exampleField = :val')
			->setParameter('val', $value)
			->getQuery()
			->getOneOrNullResult()
		;
	}
	*/
}
