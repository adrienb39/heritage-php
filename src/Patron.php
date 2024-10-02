<?php

namespace App;

// La classe Patron hérite de la classe Employe
// Elle hérite de tous les attributs et méthodes de la classe Employe
// UN OBJET DE LA CLASSE PATRON EST EGALEMENT DE LA CLASSE EMPLOYE
class Patron extends Employe
{
    // Attributs spécifiques
    private string $voiture;

    public function __construct(string $prenom, string $nom, string $age, string $voiture)
    {
        // Appel au constructeur de la super-classe (classe Employe)
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;
    }

    public function getVoiture(): string
    {
        return $this->voiture;
    }

    public function setVoiture(string $voiture): void
    {
        $this->voiture = $voiture;
    }

    // Méthodes spécifiques
    public function deplacer(): void {
        dump("Je me déplace en $this->voiture");
    }

    // Redéfinir la méthode presenter
    public function presenter(): void
    {
        dump("Bonjour, je suis {$this->getPrenom()} {$this->getNom()}, j'ai {$this->getAge()} et je suis le BOSS !");
        dump("Bonjour, je suis $this->prenom $this->prenom, j'ai $this->age et je suis le BOSS !");
    }
}