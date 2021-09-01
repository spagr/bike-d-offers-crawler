<?php

declare(strict_types=1);

namespace App\Crawler;

use Minwork\Helper\Arr;

/**
 * @method getTitle()
 * @method getOfferDate()
 * @method getSeller()
 * @method getUrl()
 * @method getPrice()
 * @method getBrand()
 * @method getProviderId()
 */
abstract class AbstractOfferDataMapper
{
	/**
	 * @var array
	 */
	protected $map = [
		'title' => '',
		'offerDate' => '',
		'seller' => '',
		'brand' => '',
		'url' => '',
		'price' => '',
		'providerId' => '',
	];

	/**
	 * @var array
	 */
	protected $data = [];

	/**
	 * @param string $name
	 * @param array  $arguments
	 *
	 * @return mixed|null
	 *
	 * @throws DataMapperException
	 */
	public function __call($name, $arguments)
	{
		$prefix = substr($name, 0, 3);
		if ('get' !== $prefix) {
			throw new DataMapperException('Wrong method prefix');
		}

		$key = lcfirst(substr($name, 3));
		if (! array_key_exists($key, $this->map)) {
			throw new DataMapperException('Mapping key not defined');
		}

		if (isset($arguments[0])) {
			$data = $arguments[0];
		} else {
			$data = $this->data;
		}

		if (! Arr::has($data, $this->map[$key])) {
			throw new DataMapperException('Data has no '.$this->map[$key].' item');
		}

		return Arr::get($data, $this->map[$key]);
	}

	/**
	 * @param array $data
	 */
	public function setData(array $data): void
	{
		$this->data = $data;
		$this->prepareData();
	}

	abstract protected function prepareData(): void;
}
