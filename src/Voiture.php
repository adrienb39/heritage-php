<?php

namespace App;

class Voiture extends Vehicule
{
    private int $nombrePortes;
    private string $typeCarburant;

    public function __construct(string $marque, string $modele, int $vitesseMax, float $prixJournalier, int $nombrePortes, string $typeCarburant)
    {
        parent::__construct($marque, $modele, $vitesseMax, $prixJournalier);
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }

    public function getNombrePortes(): int
    {
        return $this->nombrePortes;
    }

    public function setNombrePortes(int $nombrePortes): void
    {
        $this->nombrePortes = $nombrePortes;
    }

    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    public function setTypeCarburant(string $typeCarburant): void
    {
        $this->typeCarburant = $typeCarburant;
    }

    public function afficherInfos(): void {
        parent::afficherInfos();
        dump("Marque: " . $this->getMarque(), "Modele: " . $this->getModele(), "Vitesse maximale: " . $this->getVitesseMax(), "Prix journalier: ".$this->getPrixJournalier(), "Nombre de portes: " . $this->nombrePortes, "Type de carburant: " . $this->typeCarburant);
    }

    public function calculerCoutLocation(int $nbJours): float
    {
        $calculerCoutLocationVoiture = parent::calculerCoutLocation($nbJours);
        if ($this->getTypeCarburant() == "électrique") {
            return $calculerCoutLocationVoiture * 1.10;
        }
        return $calculerCoutLocationVoiture;
    }
}