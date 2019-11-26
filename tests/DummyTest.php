<?php

declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
	/**
	 * @dataProvider additionProvider
	 */
	public function testAdd($a, $b, $expected): void
	{
		$this->assertSame($expected, $a + $b);
	}

	public function additionProvider()
	{
		return [
			[0, 0, 0],
			[0, 1, 1],
			[1, 0, 1],
			[1, 1, 2],
		];
	}
}
