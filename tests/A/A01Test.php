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
	/**
	 * @dataProvider h01SheHeItProvider
	 * @param string $plainText
	 * @param string $expectedResult
	 * @return void
	 */
	public function testh01SheHeIt(string $plainText, string $expectedResult): void
	{
		$obj = new Gmc($plainText);
		if ($obj->check()) {
			$this->assertEquals($obj->getResult(), $expectedResult);
		} else {
			$this->assertEquals($plainText, $expectedResult);
		}
	}

	/**
	 * @dataProvider h01TheyWeIYouProvider
	 * @param string $plainText
	 * @param string $expectedResult
	 * @return void
	 */
	public function testh01TheyWeIYou(string $plainText, string $expectedResult): void
	{
		$obj = new Gmc($plainText);
		if ($obj->check()) {
			$this->assertEquals($obj->getResult(), $expectedResult);
		} else {
			$this->assertEquals($plainText, $expectedResult);
		}
	}

	/**
	 * @return array
	 */
	public function h01TheyWeIYouProvider(): array
	{
		return [
			// You subject
			[
				"You are not have permission",
				"You do not have permission"
			],
			[
				"You is not have permission",
				"You do not have permission",
			],
			[
				"You does not have permission",
				"You do not have permission",
			],
			[
				"You do not have permission",
				"You do not have permission",
			],
			[
				"You aren't have permission",
				"You don't have permission",
			],
			[
				"You isn't have permission",
				"You don't have permission",
			],
			[
				"You doesn't have permission",
				"You don't have permission",
			],
			[
				"You don't have permission",
				"You don't have permission",
			],

			// We subject
			[
				"We are not have permission",
				"We do not have permission"
			],
			[
				"We is not have permission",
				"We do not have permission",
			],
			[
				"We does not have permission",
				"We do not have permission",
			],
			[
				"We aren't have permission",
				"We don't have permission",
			],
			[
				"We isn't have permission",
				"We don't have permission",
			],
			[
				"We doesn't have permission",
				"We don't have permission",
			],

			// They subject
			[
				"They are not have permission",
				"They do not have permission"
			],
			[
				"They is not have permission",
				"They do not have permission",
			],
			[
				"They does not have permission",
				"They do not have permission",
			],
			[
				"They aren't have permission",
				"They don't have permission",
			],
			[
				"They isn't have permission",
				"They don't have permission",
			],
			[
				"They doesn't have permission",
				"They don't have permission",
			],

			// I subject
			[
				"I am not have permission",
				"I do not have permission"
			],
			[
				"I are not have permission",
				"I do not have permission"
			],
			[
				"I is not have permission",
				"I do not have permission",
			],
			[
				"I does not have permission",
				"I do not have permission",
			],
			[
				"I aren't have permission",
				"I don't have permission",
			],
			[
				"I isn't have permission",
				"I don't have permission",
			],
			[
				"I doesn't have permission",
				"I don't have permission",
			]
		];
	}

	/**
	 * @return array
	 */
	public function h01SheHeItProvider(): array
	{
		return [
			// He subject
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
				"He don't have permission",
				"He doesn't have permission"
			],

			// She subject
			[
				"She are not have permission",
				"She does not have permission"
			],
			[
				"She is not have permission",
				"She does not have permission"
			],
			[
				"She do not have the phone",
				"She does not have the phone"
			],
			[
				"She aren't have permission",
				"She doesn't have permission"
			],
			[
				"She isn't have permission",
				"She doesn't have permission"
			],
			[
				"She don't have permission",
				"She doesn't have permission"
			],

			// It subject
			[
				"It are not have permission",
				"It does not have permission"
			],
			[
				"It is not have permission",
				"It does not have permission"
			],
			[
				"It do not have the phone",
				"It does not have the phone"
			],
			[
				"It aren't have permission",
				"It doesn't have permission"
			],
			[
				"It isn't have permission",
				"It doesn't have permission"
			],
			[
				"It don't have permission",
				"It doesn't have permission"
			]
		];
	}
}
