<?php

namespace App;

class Produit
{
    private string $nom;
    private float $prixInitial;
    private int $quantite;

    /**
     * @param string $nom
     * @param float $prixInitial
     * @param int $quantite
     */
    public function __construct(string $nom, float $prixInitial, int $quantite)
    {
        $this->nom = $nom;
        $this->prixInitial = $prixInitial;
        $this->quantite = $quantite;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getPrixInitial(): float
    {
        return $this->prixInitial;
    }

    public function setPrixInitial(float $prixInitial): void
    {
        $this->prixInitial = $prixInitial;
    }

    public function getQuantite(): int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }

    public function afficherInfos(): void {
        dump("nom: $this->nom", "Prix initial: $this->prixInitial", "quantite: $this->quantite");
    }

    public function calculerPrixFinal(): float {
        return $this->prixInitial * $this->quantite;
    }

}