<?php

require_once "vendor/autoload.php";

use Jjunior2\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipCode('66017971');

print_r($resultado);