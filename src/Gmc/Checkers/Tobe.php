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

		while (preg_match("/(^|.*[\\s\\t]+)(you|we|they)([\\s\\t]+)(is(n\'t)?|am)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("are");
			$text = implode("", $m);
		}

		while (preg_match("/(^|.*[\\s\\t]+)(you|we|they)([\\s\\t]+)(\*?are\*?(?:n\'t|[\\s\\t]+not))([\\s\\t]+)(have)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("do");
			$text = implode("", $m);
		}

		while (preg_match("/(^|.*[\\s\\t]+)(she|he|it)([\\s\\t]+)(are)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("is");
			$text = implode("", $m);
		}

		while (preg_match("/(^|.*[\\s\\t]+)(she|he|it)([\\s\\t]+)(\*?is\*?|do)(n\'t|[\\s\\t]+not)([\\s\\t]+)(have)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("does");
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
