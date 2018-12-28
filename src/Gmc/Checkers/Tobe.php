<?php

namespace Gmc\Checkers;

use Gmc\CheckerFoundation;

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
 * @license MIT
 * @version 0.0.1
 * @package \Gmc\Checkers
 */
class Tobe extends CheckerFoundation
{
	/**
	 * @var string
	 */
	private $result;

	/**
	 * @return bool
	 */
	public function check(): bool
	{
		$text = &$this->gmc->text;

		while (preg_match("/(^|.*[\\s\\t]+)(you[\\s\\t]+)(is|am)([\\s\\t]+.*|$)/si", $text, $m)) {
			unset($m[0]);
			$m[3] = gmc_corrector("are");
			$text = implode("", $m);
		}

		return true;
	}

	/**
	 * @return void
	 */
	public function applyResult(): void
	{
	}
}
