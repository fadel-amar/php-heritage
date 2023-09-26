<?php

namespace App;

class ChefService extends Employe
{
    private string $nomService;


    public function __construct(string $prenom, string $nom, int $age, string $nomService)
    {
    // Appel au constructeur de la super calsse Employe
    parent::__construct($prenom, $nom, $age);
    $this->nomService = $nomService;
    }

    function presenter(): string
    {
        parent::presenter();
        return "Bonjour je suis {$this->prenom} {$this->nom}, j'ai {$this->age} ans et je suis le chef du service {$this->nomService }";
    }


}