<?php

namespace App;

class Location
{
    private array $vehicules = [];
    private int $nbJours;

    public function __construct(int $nbJours) {
        $this->nbJours = $nbJours;
    }

    public function getNbJours(): int
    {
        return $this->nbJours;
    }

    public function setNbJours(int $nbJours): void
    {
        $this->nbJours = $nbJours;
    }

    public function louerVehicule(Vehicule $vehicule): void {
        $this->vehicules[] = $vehicule;
    }

    public function afficherDetailsLocation(): void
    {
        dump("Location pour {$this->getNbJours()} jours : \n");
        $coutLocationTotal = 0;

        foreach ($this->vehicules as $vehicule) {
            dump("{$vehicule->afficherInfos()}");
            $coutLocation = $vehicule->calculerCoutLocation($this->nbJours);
            dump("Coût pour {$this->nbJours} jours : $coutLocation €");
            $coutLocationTotal += $coutLocation;
        }
        dump("Coût total de la location : $coutLocationTotal €");
    }
}