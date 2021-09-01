<?php

declare(strict_types=1);

namespace App\Crawler\Aukro;

use App\Crawler\AbstractOfferDataMapper;
use DateTimeImmutable;
use Nette\Utils\Arrays;

/**
 * Class AukroOfferDataMapper.
 *
 * @method getSellerId()
 * @method getSellerUsername()
 */
class AukroOfferDataMapper extends AbstractOfferDataMapper
{
	/**
	 * @var array
	 */
	protected $map = [
		'title' => 'itemName',
		'offerDate' => 'startingTime',
		'seller' => 'seller',
		'sellerId' => 'seller.userId',
		'sellerUsername' => 'seller.userName',
		'brand' => 'associatedAttributes.Značka',
		'url' => 'seoUrl',
		'price' => 'price',
		'providerId' => 'itemId',
	];

	protected function prepareData(): void
	{
		$this->data['associatedAttributes'] = Arrays::associate($this->data['attributes'], 'attributeName=attributeValue');
		$this->data[$this->map['offerDate']] = DateTimeImmutable::createFromFormat('Y-m-d\TH:i:s.uT', $this->data[$this->map['offerDate']]) ?: null;
	}
}
