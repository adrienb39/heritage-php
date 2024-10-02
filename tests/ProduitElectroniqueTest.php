<?php

use App\ProduitElectronique;
use PHPUnit\Framework\TestCase;

class ProduitElectroniqueTest extends TestCase {
    public function testProduitElectronique() {
        $produitElectronique = new ProduitElectronique("Smartphone", "500", "10", "36");
        $produitElectronique->calculerPrixFinal();
        $this->assertEquals(400, $produitElectronique->calculerPrixFinal());
    }
}