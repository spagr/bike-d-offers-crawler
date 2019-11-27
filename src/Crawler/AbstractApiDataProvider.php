<?php

declare(strict_types=1);

namespace App\Crawler;

use Symfony\Component\HttpClient\HttpOptions;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

abstract class AbstractApiDataProvider
{
	/**
	 * @var string Url
	 */
	protected const END_POINT = '';

	/**
	 * @var string Request method
	 */
	protected const METHOD = 'POST';

	/**
	 * @var HttpClientInterface
	 */
	private $httpClient;

	/**
	 * @var ResponseInterface|null
	 */
	private $lastResponse = null;

	public function __construct(HttpClientInterface $httpClient)
	{
		$this->httpClient = $httpClient;
	}

	abstract public function getPayload(): array;

	abstract public function getQuery(): array;

	public function apiRequest(array $query = [], array $payload = [], ?string $token = null): array
	{
		$options = (new HttpOptions())
			->setQuery($query)
			->setJson($payload)
			->setHeaders([
				'Content-Type' => 'application/json',
				'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
				'cache-control' => 'no-cache',
				'pragma' => 'no-cache',
			]);
		if (null !== $token) {
			$options->setAuthBearer($token);
		}

		$this->lastResponse = $this->httpClient->request(
			static::METHOD,
			static::END_POINT,
			$options->toArray()
		);

		return $this->lastResponse->toArray();
	}

	/**
	 * @return ResponseInterface|null
	 */
	public function getLastResponse(): ?ResponseInterface
	{
		return $this->lastResponse;
	}
}
