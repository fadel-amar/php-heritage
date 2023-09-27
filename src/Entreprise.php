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
    public function __construct(string $nom, string $ville)
    {
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
    public function ajouterEmploye(Employe $employe): string   {
        // Si c'est un patron
        $siEmployePatron = $employe instanceof Patron;
        // Si l'entreprise ne possède pas de patron
        $siEntreprisePossedePatron = $this->retrouverPatron() != null;

        $siPossibleAjouter= !($siEmployePatron && $siEntreprisePossedePatron);
        if($siPossibleAjouter) {
            $this->employes[] = $employe;
            return 'true';
        }
        return "false\n";

    }


    public function prenseterEmployes(): void
    {
        foreach ($this->employes as $employe) {
            // utilisation du polymorphisme de méthode
            echo $employe->presenter() . " \n";
        }
    }

    public function retrouverPatron(): ?Patron
    {
        foreach ($this->employes as $employe) {
            if ($employe instanceof \App\Patron) {
                return $employe;
            }
        }
        return null;
    }

    public function listEmployes (): array {
        $listEmployes = [];
        foreach ($this->employes as $employe) {
            $cle = (new \ReflectionClass($employe))->getShortName();
            if(!isset($listEmployes[$cle])){
                $listEmployes[$cle] = [];
            }
            $listEmployes[$cle][] = $employe;
        }
        return $listEmployes;
    }

   /* public function ajouterEmployesCSV($file) {


    }*/



}