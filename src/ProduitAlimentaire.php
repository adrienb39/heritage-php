<?php

namespace App;

class ProduitAlimentaire extends Produit
{
    private \DateTime $datePeremption;

    /**
     * @param \DateTime $datePeremption
     */
    public function __construct(string $nom, float $prixInitial, int $quantite, \DateTime $datePeremption)
    {
        parent::__construct($nom, $prixInitial, $quantite);
        $this->datePeremption = $datePeremption;
    }

    public function getDatePeremption(): \DateTime
    {
        return $this->datePeremption;
    }

    public function setDatePeremption(\DateTime $datePeremption): void
    {
        $this->datePeremption = $datePeremption;
    }

    public function afficherInfos(): void {
        dump("Produit Alimentaire : ");
        dump("nom: {$this->getNom()}", "Prix initial: " . number_format($this->getPrixInitial(), 2, ".", ""), "quantite: {$this->getQuantite()}", "datePeremption: {$this->datePeremption->format('d/m/Y')}");
    }

    public function calculerPrixFinal(): float {
        if ($this->datePeremption < new \DateTime("now +7 days")) {
            return $this->getPrixInitial() * 0.70;
        }
        return $this->getPrixInitial();
    }
}

// classe ProduitAlimentaire : test unitaire méthode calculerPrixFinal()
// classe ProduitElectronique : test unitaire méthode calculerPrixFinal()