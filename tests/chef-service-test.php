<?php

use App\ChefService;

require_once __DIR__ . '/../vendor/autoload.php';

$chefService = new ChefService("Alain", "Durand", 38, "chef du service informatique");
$chefService->presenter();