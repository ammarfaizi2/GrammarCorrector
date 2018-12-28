<?php

namespace tests\A;

use Gmc\Gmc;
use PHPUnit\Framework\TestCase;

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com> https://www.facebook.com/ammarfaizi2
 * @license MIT
 * @version 0.0.1
 * @package \Gmc\Constants
 */
class A01Test extends TestCase
{

	public function sheHeItProvider(): array
	{
		return [
			[
				"He do not have permission",
				"He does not have permission"
			]
		];
	}

	/**
	 * @dataProvider sheHeItProvider
	 * @param string $plainText
	 * @param string $expectedResult
	 * @return void
	 */
	public function testSheHeIt(string $plainText, string $expectedResult): void
	{
		$obj = new Gmc($plainText);
		if ($obj->check()) {
			$this->assertEquals($obj->getResult(), $expectedResult);
		} else {
			$this->assertEquals($plainText, $expectedResult);
		}
	}
}
