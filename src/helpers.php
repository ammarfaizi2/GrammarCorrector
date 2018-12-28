<?php

/**
 * @param string $str
 * @return string
 */
function gmc_corrector(string $str): string
{
	return GMC_CORRECTION_FLAG.$str.GMC_CORRECTION_FLAG;
}
