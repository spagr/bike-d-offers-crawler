<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\OfferPicture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method OfferPicture|null find($id, $lockMode = null, $lockVersion = null)
 * @method OfferPicture|null findOneBy(array $criteria, array $orderBy = null)
 * @method OfferPicture[]    findAll()
 * @method OfferPicture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfferPictureRepository extends ServiceEntityRepository
{
	public function __construct(ManagerRegistry $managerRegistry)
	{
		parent::__construct($managerRegistry, OfferPicture::class);
	}

	// /**
	//  * @return OfferPicture[] Returns an array of OfferPicture objects
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
	public function findOneBySomeField($value): ?OfferPicture
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
