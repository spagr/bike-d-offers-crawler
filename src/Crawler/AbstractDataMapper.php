<?php

declare(strict_types=1);

namespace App\Crawler;

use Minwork\Helper\Arr;

/**
 * @method getHotelId()
 * @method getHotelName()
 * @method getLatitude()
 * @method getLongitude()
 */
abstract class AbstractDataMapper
{
	/**
	 * *.
	 *
	 * @var array
	 */
	protected $map = [
		'latitude' => '',
		'longitude' => '',
		'hotelName' => '',
		'hotelId' => '',
		'url' => '',
	];

	/**
	 * *.
	 *
	 * @var array
	 */
	private $data = [];

	public function __construct(array $data = [])
	{
		$this->data = $data;
	}

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
			throw new DataMapperException('Data has no '.$this->map[$key].'item');
		}

		return Arr::get($data, $this->map[$key]);
	}

	/**
	 * @param array $data
	 */
	public function setData(array $data): void
	{
		$this->data = $data;
	}
}
