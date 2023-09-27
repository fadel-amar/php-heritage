<?php

namespace App;

class Employe extends Personnel {


    public function __construct(string $prenom, string $nom, int $age) {
        parent::__construct($prenom, $nom, $age);
    }

    /**
     * @return string
     */
    public function getPrenom(): string {
        return $this->prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getAge(): int {
        return $this->age;
    }

    public function presenter(): string  {
        return "Bonjour je m'appelle  {$this->nom}  {$this->prenom} et j'ai {$this->age} ans";
    }


}