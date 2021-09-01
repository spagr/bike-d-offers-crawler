<?php

declare(strict_types=1);

namespace App\Crawler\Aukro;

use App\Crawler\DataMapperException;
use App\Entity\Brand;
use App\Entity\Offer;
use App\Entity\OfferSource;
use App\Entity\Seller;
use App\Repository\BrandRepository;
use App\Repository\OfferSourceRepository;
use App\Repository\SellerRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;

class AukroEntityFactory
{
	/**
	 * @var int
	 */
	private const SOURCE_ID = 1;

	/**
	 * @var array
	 */
	private $brandCache = [];
	/**
	 * @var AukroOfferDataMapper
	 */
	private $aukroOfferDataMapper;
	/**
	 * @var BrandRepository
	 */
	private $brandRepository;
	/**
	 * @var EntityManagerInterface
	 */
	private $entityManager;

	/**
	 * @var OfferSource
	 */
	private $offerSource;
	/**
	 * @var SellerRepository
	 */
	private $sellerRepository;

	public function __construct(
		AukroOfferDataMapper $aukroOfferDataMapper,
		EntityManagerInterface $entityManager,
		BrandRepository $brandRepository,
		SellerRepository $sellerRepository,
		OfferSourceRepository $offerSourceRepository
	) {
		$this->aukroOfferDataMapper = $aukroOfferDataMapper;
		$this->brandRepository = $brandRepository;
		$this->entityManager = $entityManager;
		$this->offerSource = $offerSourceRepository->find(self::SOURCE_ID);
		$this->sellerRepository = $sellerRepository;
	}

	public function fromRawItem(array $rawItem): Offer
	{
		$this->aukroOfferDataMapper->setData($rawItem);
		$offer = new Offer();
		$offer->setTitle($this->aukroOfferDataMapper->getTitle())
			->setOfferDate($this->aukroOfferDataMapper->getOfferDate())
			->setPrice($this->aukroOfferDataMapper->getPrice())
			->setPriceCZK($this->aukroOfferDataMapper->getPrice())
			->setUrl($this->aukroOfferDataMapper->getUrl())
			->setBrand($this->getBrand())
			->setSourceItemId($this->aukroOfferDataMapper->getProviderId())
			// TODO: handle dynamic country
			->setCountry('CR')
			->setCreatedAt(new DateTimeImmutable())
			->setSource($this->offerSource)
			->setSeller($this->getSeller());

		return $offer;
	}

	private function getBrand(): ?Brand
	{
		try {
			$brandName = $this->aukroOfferDataMapper->getBrand();
		} catch (DataMapperException $dataMapperException) {
			return null;
		}

		if (array_key_exists($brandName, $this->brandCache)) {
			return $this->brandCache[$brandName];
		}

		$brand = $this->brandRepository->findOneBy(['name' => $brandName]);
		if ($brand === null) {
			// TODO: what to do now ? Create one or throw Exception ?
			$brand = new Brand();
			$brand->setName($brandName);
			$brand->setCreatedAt(new DateTimeImmutable());
			$brand->setMetadataText('Created from Aukro');
			$this->entityManager->persist($brand);
		}

		$this->brandCache[$brandName] = $brand;

		return $brand;
	}

	private function getSeller(): Seller
	{
		$seller = $this->sellerRepository->findOneBy([
			'source' => $this->offerSource,
			'sourceUserId' => $this->aukroOfferDataMapper->getSellerId(),
		]);

		if ($seller === null) {
			$seller = new Seller();
			$seller->setSource($this->offerSource)
				->setSourceUserId($this->aukroOfferDataMapper->getSellerId())
				->setSourceUsername($this->aukroOfferDataMapper->getSellerUsername())
				->setCreatedAt(new DateTimeImmutable());
			$this->entityManager->persist($seller);
		}

		return $seller;
	}
}
