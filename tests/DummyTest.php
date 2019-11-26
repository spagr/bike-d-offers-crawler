<?php

declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
	/**
	 * @dataProvider additionProvider
	 */
	public function testAdd(int $a, int $b, int $expected): void
	{
		$this->assertSame($expected, $a + $b);
	}

	public function additionProvider(): array 
	{
		return [
			[0, 0, 0],
			[0, 1, 1],
			[1, 0, 1],
			[1, 1, 2],
		];
	}
}
