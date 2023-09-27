<?php

namespace App;

// La classe patron hérite de la classe Employe

class Patron extends Personnel {
    private string $voiture;
    private int $bonus;

    public function __construct(string $prenom, string $nom, int $age, $voiture)
    {
        // Appel au constructeur de la super calsse Employe
    parent::__construct($prenom, $nom, $age);
    $this->voiture = $voiture;
    $this->bonus = 1000;

    }

    public function presenter() : string {
        return "Bonjour je me nomme {$this->nom}  {$this->prenom} et je suis le B.O.S.S";
    }


    public function deplacer () : string {
        return "Je me déplace en {$this->voiture}";
    }

    public function getSalaire(): int {
        return $this->salaireBase + $this->bonus;
    }


}