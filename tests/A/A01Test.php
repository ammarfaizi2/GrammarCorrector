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

	public function h01SheHeItProvider(): array
	{
		return [
			[
				"He are not have permission",
				"He does not have permission"
			],
			[
				"He is not have permission",
				"He does not have permission"
			],
			[
				"He do not have the phone",
				"He does not have the phone"
			],
			[
				"He aren't have permission",
				"He doesn't have permission"
			],
			[
				"He isn't have permission",
				"He doesn't have permission"
			],
			[
				"He don't have the phone",
				"He doesn't have permission"
			]
		];
	}

	/**
	 * @dataProvider h01SheHeItProvider
	 * @param string $plainText
	 * @param string $expectedResult
	 * @return void
	 */
	public function testh01SheHeItProvider(string $plainText, string $expectedResult): void
	{
		$obj = new Gmc($plainText);
		if ($obj->check()) {
			$this->assertEquals($obj->getResult(), $expectedResult);
		} else {
			$this->assertEquals($plainText, $expectedResult);
		}
	}
}
