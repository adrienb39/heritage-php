<?php

namespace App;

class Moto extends Vehicule
{
    private string $typeGuidon;

    public function __construct(string $marque, string $modele, int $vitesseMax, float $prixJournalier, string $typeGuidon)
    {
        parent::__construct($marque, $modele, $vitesseMax, $prixJournalier);
        $this->typeGuidon = $typeGuidon;
    }

    public function getTypeGuidon(): string
    {
        return $this->typeGuidon;
    }

    public function setTypeGuidon(string $typeGuidon): void
    {
        $this->typeGuidon = $typeGuidon;
    }

    public function afficherInfos(): void
    {
        parent::afficherInfos();
        dump("Marque: ".$this->getMarque(), "Modele: ".$this->getModele(), "Vitesse maximale: ".$this->getVitesseMax(), "Prix journalier: ".$this->getPrixJournalier(), "Type Guidon: ".$this->typeGuidon);
    }

    public function calculerCoutLocation(int $nbJours): float
    {
        $calculerCoutLocationMoto = parent::calculerCoutLocation($nbJours);
        if ($nbJours > 7) {
            return $calculerCoutLocationMoto * 0.95;
        }
        return $calculerCoutLocationMoto;
    }
}