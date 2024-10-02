<?php

namespace App;

class ChefService extends Employe
{
    private string $service;

    public function __construct(string $prenom, string $nom, string $age, string $service) {
        parent::__construct($prenom, $nom, $age);
        $this->service = $service;
    }

    public function presenter(): void
    {
        dump("Bonjour, je suis $this->prenom $this->nom, j'ai $this->age ans et je suis le $this->service");
    }
}