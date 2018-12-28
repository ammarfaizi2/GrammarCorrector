<?php

namespace Gmc;

use Gmc\Checkers\Tobe;

if (defined("GMC_ENABLE")):

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
 * @license MIT
 * @version 0.0.1
 * @package \Gmc
 */
final class Gmc
{
	/**
	 * @var string
	 */
	public $text;

	/**
	 * @var string
	 */
	private $originText;

	/**
	 * @var string
	 */
	private $result = "";

	/**
	 * @param string $text
	 *
	 * Constructor.
	 */
	public function __construct(string $text)
	{
		$this->originText = $this->text = $text;
		$this->text = $text;
	}

	/**
	 * @return bool
	 */
	public function check(): bool
	{
		defined("GMC_CORRECTION_FLAG") or define("GMC_CORRECTION_FLAG", "*");
		
		$check = false;

		$obj = new Tobe($this);
		if ($obj->check()) {
			$check = true;
			$this->getResult();
		}

		return true;
	}

	/**
	 * @return string
	 */
	public function getResult(): string
	{
		$this->result = $this->text;
		return $this->result;	
	}
}

endif;