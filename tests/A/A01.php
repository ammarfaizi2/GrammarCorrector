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
class A01 extends TestCase
{

	public function sheHeItProvider(): array
	{

	}

	/**
	 * @dataProvider sheHeItProvider
	 * @param string $plainText
	 * @param string $expectedResult
	 * @return void
	 */
	public function sheHeItTest(string $plainText, string $expectedResult): void
	{
		$obj = new Gmc($plainText);
		if ($obj->check()) {
			$this->assertEquals($obj->getResult(), $expectedResult);
		} else {
			$this->assertEquals($plainText, $expectedResult);
		}
	}
}
