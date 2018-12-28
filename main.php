<?php

require __DIR__."/config.php";
require __DIR__."/vendor/autoload.php";

use Gmc\Gmc;

$text = "You is beautiful";

printf("Plain text:\n%s\n\n", $text);


printf("Corrector Response:\n");
$gmc = new Gmc($text);

if ($gmc->check()) {
	printf("%s\n", $gmc->getResult());
} else {
	printf("There is no issue\n");
}
