<?php

namespace App;

class Catalogue
{
    private array $produits = [];

    public function getProduits(): array
    {
        return $this->produits;
    }

    public function setProduits(array $produits): void
    {
        $this->produits = $produits;
    }

    public function ajouterProduit(Produit $produit): void {
        $this->produits[] = $produit;
    }

    public function afficherProduit(): void {
        dump("Catalogue des produits : ");
        foreach ($this->produits as $produit) {
            dump("-------------------------");
            $produit->afficherInfos();
            dump("Prix final : " . number_format($produit->calculerPrixFinal(), 2) . " €");
        }
        $this->calculerTotalPrix();
    }

    public function calculerTotalPrix(): void
    {
        $total = 0;
        foreach ($this->produits as $produit) {
            $total += $produit->calculerPrixFinal() * $produit->getQuantite();
        }
        dump("Total des prix des produits dans le catalogue : " . number_format($total, 2, ".", "") . " €");
    }
}