<?php

require __DIR__."/config.php";
require __DIR__."/vendor/autoload.php";

use Gmc\Gmc;

$text = "He are not have permission";

printf("Plain text:\n%s\n\n", $text);


printf("Corrector Response:\n");
$gmc = new Gmc($text);

if ($gmc->check()) {
	printf("%s\n", $gmc->getResult());
} else {
	printf("%s", $text);
}
