<?php

namespace App;

class ProduitElectronique extends Produit
{
    private int $garantie;

    /**
     * @param int $garantie
     */
    public function __construct(string $nom, float $prixInitial, int $quantite, int $garantie)
    {
        parent::__construct($nom, $prixInitial, $quantite);
        $this->garantie = $garantie;
    }

    public function getGarantie(): int
    {
        return $this->garantie;
    }

    public function setGarantie(int $garantie): void
    {
        $this->garantie = $garantie;
    }

    public function afficherInfos(): void {
        dump("Produit électronique : ");
        dump("nom: {$this->getNom()}", "Prix initial: " . number_format($this->getPrixInitial(), 2, ".", ""), "quantite: {$this->getQuantite()}", "garantie: $this->garantie mois");
    }

    public function calculerPrixFinal(): float {
        if($this->garantie > 24) {
            return $this->getPrixInitial() * 0.80;
        }
        return $this->getPrixInitial();
    }
}