<?php

namespace Gmc\Checkers;

use Gmc\CheckerFoundation;

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com> https://www.facebook.com/ammarfaizi2
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
		$bool = false;

		$text = &$this->gmc->text;

		while (preg_match("/(^|.*[\\s\\t]+)(I)([\\s\\t]+)((?:is|are)(n\'t)?)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("am");
			$text = implode("", $m);
			$bool = true;
		}

		while (preg_match("/(^|.*[\\s\\t]+)(I)([\\s\\t]+)(\*?(?:are|am)\*?|does)(n\'t|[\\s\\t]+not)([\\s\\t]+)(have)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("do");
			$text = implode("", $m);
			$bool = true;
		}

		while (preg_match("/(^|.*[\\s\\t]+)(you|we|they)([\\s\\t]+)(is(n\'t)?|am)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("are");
			$text = implode("", $m);
			$bool = true;
		}

		while (preg_match("/(^|.*[\\s\\t]+)(you|we|they)([\\s\\t]+)(\*?are\*?|does)(n\'t|[\\s\\t]+not)([\\s\\t]+)(have)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("do");
			$text = implode("", $m);
			$bool = true;
		}

		while (preg_match("/(^|.*[\\s\\t]+)(she|he|it)([\\s\\t]+)(are(n\'t|[\\s\\t]+not)|am)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("is");
			$text = implode("", $m);
			$bool = true;
		}

		while (preg_match("/(^|.*[\\s\\t]+)(she|he|it)([\\s\\t]+)(\*?is\*?|do)(n\'t|[\\s\\t]+not)([\\s\\t]+)(have)([\\s\\t]+.*|$)/Ssi", $text, $m)) {
			unset($m[0]);
			$m[4] = gmc_corrector("does");
			$text = implode("", $m);
			$bool = true;
		}

		return $bool;
	}

	/**
	 * @return void
	 */
	public function applyResult(): void
	{
	}
}
