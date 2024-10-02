<?php

use App\ProduitAlimentaire;
use PHPUnit\Framework\TestCase;

class ProduitAlimentaireTest extends TestCase {
    public function testProduitAlimentaire() {
        $produitAlimentaire = new ProduitAlimentaire("Pomme", "1", "100", new DateTime("04/10/2024"));
        $produitAlimentaire->calculerPrixFinal();
        $this->assertEquals(0.70, $produitAlimentaire->calculerPrixFinal());
    }
}