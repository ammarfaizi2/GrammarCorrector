<?php

namespace Gmc;

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
 * @license MIT
 * @version 0.0.1
 * @package \Gmc
 */
abstract class CheckerFoundation
{
	/**
	 * @var \Gmc\Gmc
	 */
	protected $gmc;

	/**
	 * @param \Gmc\Gmc &$gmc
	 *
	 * Constructor.
	 */
	public function __construct(Gmc &$gmc)
	{
		$this->gmc = $gmc;
	}

	/**
	 * @return bool
	 */
	abstract public function check(): bool;

	/**
	 * @return void
	 */
	abstract public function applyResult(): void;
}
