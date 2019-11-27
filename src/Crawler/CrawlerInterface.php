<?php

declare(strict_types=1);

namespace App\Crawler;

use App\Entity\Offer;
use Generator;

interface CrawlerInterface
{
	public function prepare(): void;

	/**
	 * @return Generator|Offer[]
	 */
	public function getElement(): iterable;
}
