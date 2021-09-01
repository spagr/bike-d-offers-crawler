<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Seller;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Seller|null find($id, $lockMode = null, $lockVersion = null)
 * @method Seller|null findOneBy(array $criteria, array $orderBy = null)
 * @method Seller[]    findAll()
 * @method Seller[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SellerRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $managerRegistry)
	{
		parent::__construct($managerRegistry, Seller::class);
	}

	// /**
	//  * @return Seller[] Returns an array of Seller objects
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
	public function findOneBySomeField($value): ?Seller
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
