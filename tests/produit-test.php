<?php

use App\Catalogue;
use App\ProduitAlimentaire;
use App\ProduitElectronique;

require_once __DIR__ ."/../vendor/autoload.php";

$cataloque = new Catalogue();
$cataloque->ajouterProduit(new ProduitAlimentaire("Pomme", "1", "100", new DateTime("04/10/2024")));
$cataloque->ajouterProduit(new ProduitElectronique("Smartphone", "500", "10", "36"));

$cataloque->afficherProduit();