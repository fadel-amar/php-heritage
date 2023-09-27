<?php

namespace App;

abstract class Personnel {
    protected string $prenom;
    protected string $nom;
    protected int $age;
    protected int $salaireBase;

    /**
     * @param string $prenom
     * @param string $nom
     * @param int $age
     */
    public function __construct(string $prenom, string $nom, int $age) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->salaireBase = 2500;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return int
     */
    public function getSalaire(): int
    {
        return $this->salaireBase;
    }



    abstract public function presenter():string;

}