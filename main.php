<?php

require __DIR__."/config.php";
require __DIR__."/vendor/autoload.php";

use Gmc\Gmc;

$text = "Hello bro, You is beautiful, you am great";
$gmc = new Gmc($text);

if ($gmc->check()) {
	printf("%s\n", $gmc->getResult());
} else {
	printf("There is no issue\n");
}
