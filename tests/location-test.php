<?php

use App\Location;
use App\Voiture;
use App\Moto;

require_once __DIR__ . '/../vendor/autoload.php';

$location = new Location(5);
$voiture = new Voiture("Tesla", "Model 3", 220, 100, 4, "électrique");
$moto = new Moto("Yamaha", "MT-07", 210, 50, "Acier");

$location->louerVehicule($voiture);
$location->louerVehicule($moto);
$location->afficherDetailsLocation();