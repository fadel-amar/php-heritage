<?php

namespace App;

class Entreprise
{
    private string $nom;
    private string $ville;
    // Association avec employe
    /**
     * @var Employe[]
     */
    private array $employes;

    /**
     * @param string $nom
     * @param string $ville
     */
    public function __construct(string $nom, string $ville) {
        $this->nom = $nom;
        $this->ville = $ville;
        $this->employes = [];
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param Employe $employe
     * @return void
     */
    // Utilisation du polymorphisme d'objet sur le paramètre employe
    public function ajouterEmploye (Employe $employe) : void {
        $this->employes[] = $employe;

    }

    public function prenseterEmployes (): void {
        foreach ($this->employes as $employe) {
            // utilisation du polymorphisme de méthode
            echo $employe->presenter()." \n";
        }

}




}