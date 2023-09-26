<?php

namespace App;

// La classe patron hérite de la classe Employe

class Patron extends Employe {
    private string $voiture;

    public function __construct(string $prenom, string $nom, int $age, $voiture)
    {
        // Appel au constructeur de la super calsse Employe
    parent::__construct($prenom, $nom, $age);
    $this->voiture = $voiture;

    }

    public function presenter() : string {
        parent::presenter();
        return "Bonjour je me nomme {$this->nom}  {$this->prenom} et je suis le B.O.S.S";
    }



    public function deplacer () : string {
        return "Je me déplace en {$this->voiture}";
    }
}