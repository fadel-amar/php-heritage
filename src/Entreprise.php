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
    private array $personnels;

    /**
     * @param string $nom
     * @param string $ville
     */
    public function __construct(string $nom, string $ville)
    {
        $this->nom = $nom;
        $this->ville = $ville;
        $this->personnels = [];
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
     * @param Employe $personnel
     */
    // Utilisation du polymorphisme d'objet sur le paramètre employe
    public function ajouterEmploye(Personnel $personnel): string   {
        // Si c'est un patron
        $siEmployePatron = $personnel instanceof Patron;
        // Si l'entreprise ne possède pas de patron
        $siEntreprisePossedePatron = $this->retrouverPatron() != null;

        $siPossibleAjouter= !($siEmployePatron && $siEntreprisePossedePatron);
        if($siPossibleAjouter) {
            $this->personnels[] = $personnel;
            return 'true';
        }
        return "false\n";

    }


    public function prenseterPersonnels(): void
    {
        foreach ($this->personnels as $personnel) {
            // utilisation du polymorphisme de méthode
            echo $personnel->presenter() . " \n";
        }
    }

    public function retrouverPatron(): ?Patron
    {
        foreach ($this->personnels as $employe) {
            if ($employe instanceof \App\Patron) {
                return $employe;
            }
        }
        return null;
    }

    public function listEmployes (): array {
        $listEmployes = [];
        foreach ($this->personnels as $employe) {
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

    public function findAllSalaireBySalarie () :array {
        $salaires = [];
        foreach ($this->personnels as $personnel) {
            $salaires['salarie'][] = [$personnel];
            $salaires['salaire'][] = $personnel->getSalaire();
        }
        return $salaires;
    }



}