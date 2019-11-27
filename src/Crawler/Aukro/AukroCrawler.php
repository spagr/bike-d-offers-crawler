<?php

declare(strict_types=1);

namespace App\Crawler\Aukro;

use App\Crawler\CrawlerInterface;
use App\Crawler\CrawlerPaginator;
use App\Crawler\Exception\CrawlerUnpreparedDataException;
use App\Entity\Offer;
use App\Repository\OfferRepository;
use Doctrine\ORM\EntityManagerInterface;
use Generator;

final class AukroCrawler implements CrawlerInterface
{
	/**
	 * @var int
	 */
	private const BULK_ITEMS_COUNT = 50;

	/**
	 * @var int
	 */
	private $bulkCounter;

	/**
	 * @var array
	 */
	private $result = [];
	/**
	 * @var EntityManagerInterface
	 */
	private $entityManager;
	/**
	 * @var AukroApiDataProvider
	 */
	private $aukroApiDataProvider;

	/**
	 * @var CrawlerPaginator
	 */
	private $crawlerPaginator;
	/**
	 * @var AukroEntityFactory
	 */
	private $aukroEntityFactory;

	/**
	 * @var Offer
	 */
	private $lastOffer;
	/**
	 * @var OfferRepository
	 */
	private $offerRepository;

	public function __construct(
		EntityManagerInterface $entityManager,
		AukroApiDataProvider $aukroApiDataProvider,
		AukroEntityFactory $aukroEntityFactory,
		OfferRepository $offerRepository
	) {
		$this->entityManager = $entityManager;
		$this->aukroApiDataProvider = $aukroApiDataProvider;
		$this->crawlerPaginator = new CrawlerPaginator();
		$this->aukroEntityFactory = $aukroEntityFactory;
		$this->offerRepository = $offerRepository;
	}

	public function prepare(): void
	{
		$this->result = $this->aukroApiDataProvider->apiRequest(
			$this->aukroApiDataProvider->getQuery(),
			$this->aukroApiDataProvider->getPayload()
		);

		// TODO: check result
		$page = $this->result['page'];
		$this->crawlerPaginator
			->setPageNumber($page['number'])
			->setSize($page['size'])
			->setTotalElements($page['totalElements'])
			->setTotalPages($page['totalPages']);
	}

	/**
	 * @return Generator|Offer[]
	 */
	public function getElement(): iterable
	{
		if ($this->result === []) {
			throw new CrawlerUnpreparedDataException('Call prepare() method first');
		}

		if (! $this->crawlerPaginator->hasElements()) {
			return;
		}

		do {
			foreach ($this->result['content'] as $rawItem) {
				$this->lastOffer = $this->aukroEntityFactory->fromRawItem($rawItem);
				yield $this->lastOffer;
			}
		} while ($this->nextPage());
	}

	public function isNew(?Offer $offer = null): bool
	{
		$offer = $offer ?? $this->lastOffer;
		$dbEntity = $this->offerRepository->findOneBy([
			'sourceItemId' => $offer->getSourceItemId(),
			// TODO extent to source select
			//			'source' => '',
		]);
		if ($dbEntity === null) {
			return true;
		}

		return false;
	}

	public function persistLastOffer(?Offer $offer = null): void
	{
		$this->entityManager->persist($offer ?? $this->lastOffer);
		++$this->bulkCounter;
	}

	public function bulkFlush(): void
	{
		if ($this->bulkCounter > self::BULK_ITEMS_COUNT) {
			$this->entityManager->flush();
			$this->bulkCounter = 0;
			$this->entityManager->clear(Offer::class);
		}
	}

	/**
	 * @return Offer
	 */
	public function getLastOffer(): Offer
	{
		return $this->lastOffer;
	}

	private function nextPage(): bool
	{
		if ($this->crawlerPaginator->nextPage()) {
			$this->result = $this->aukroApiDataProvider->apiRequest(
				$this->aukroApiDataProvider->getQuery(
					$this->crawlerPaginator->getPageNumber(),
					$this->crawlerPaginator->getSize()
				),
				$this->aukroApiDataProvider->getPayload()
			);

			return true;
		}

		return false;
	}
}
