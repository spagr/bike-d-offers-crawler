<?php

declare(strict_types=1);

namespace App\Crawler;

class CrawlerPaginator
{
	/**
	 * @var int
	 */
	private $pageNumber = 0;

	/**
	 * @var int
	 */
	private $size;

	/**
	 * @var int
	 */
	private $totalElements;

	/**
	 * @var int
	 */
	private $totalPages;

	/**
	 * @return int
	 */
	public function getPageNumber(): int
	{
		return $this->pageNumber;
	}

	public function nextPage(): bool
	{
		++$this->pageNumber;
		if ($this->pageNumber > $this->totalPages) {
			return false;
		}

		return true;
	}

	public function hasElements(): bool
	{
		return $this->totalElements > 0;
	}

	/**
	 * @param int $pageNumber
	 *
	 * @return CrawlerPaginator
	 */
	public function setPageNumber(int $pageNumber): self
	{
		$this->pageNumber = $pageNumber;

		return $this;
	}

	/**
	 * @param int $size
	 *
	 * @return CrawlerPaginator
	 */
	public function setSize(int $size): self
	{
		$this->size = $size;

		return $this;
	}

	/**
	 * @param int $totalElements
	 *
	 * @return CrawlerPaginator
	 */
	public function setTotalElements(int $totalElements): self
	{
		$this->totalElements = $totalElements;

		return $this;
	}

	/**
	 * @param int $totalPages
	 *
	 * @return CrawlerPaginator
	 */
	public function setTotalPages(int $totalPages): self
	{
		$this->totalPages = $totalPages;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getSize(): int
	{
		return $this->size;
	}
}
