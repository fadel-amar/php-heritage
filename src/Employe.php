<?php

namespace App;

class Employe {
     private string $prenom;
     private string $nom;
     private int $age;

    /**
     * @param string $prenom
     * @param string $nom
     * @param int $age
     */
    public function __construct(string $prenom, string $nom, int $age) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
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

    public function presenter() : string {
        return "Je m'appelle $this->prenom $this->nom  et j'ai $this->age ans";
    }



}