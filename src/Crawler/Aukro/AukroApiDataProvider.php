<?php

declare(strict_types=1);

namespace App\Crawler\Aukro;

use App\Crawler\AbstractApiDataProvider;

class AukroApiDataProvider extends AbstractApiDataProvider
{
	/**
	 * @var string Url
	 */
	protected const END_POINT = 'https://aukro.cz/backend/api/offers/search';

	public function getPayload(): array
	{
		return [
			'categorySeoUrl' => 'jizdni-kola',
			'juniorUser' => false,
			'splitGroupKey' => 'listing',
			'splitGroupValue' => 'E4',
		];
	}

	public function getQuery(int $page = 0, int $size = 60, string $sort = 'startingTime:DESC'): array
	{
		return [
			'page' => $page,
			'size' => $size,
			'sort' => $sort,
		];
	}
}
