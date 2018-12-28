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

		while (preg_match("/(^|.*[\\s\\t]+)(you|we|they)([\\s\\t]+)(is|am)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("are");
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
