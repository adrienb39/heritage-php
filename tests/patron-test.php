<?php

use App\Patron;

require_once __DIR__ . "/../vendor/autoload.php";

$patron = new Patron("Pierre", "Dupond", 50, "Mercedes");
$patron->presenter();
$patron->deplacer();