<?php
require "./vendor/autoload.php";

$entreprise = new \App\Entreprise('LDLC', 'Besançon');
$employe = new \App\Employe('Gonzalo','Ramos', '28');
$employe2 = new \App\Employe('Luis','Enrique', '48');
$patron = new \App\Patron('Idriss','Rakoto',28,'Toyota');
$patron2 = new \App\Patron('Vato','lOUIS',32,'rs4');
$chef = new \App\ChefService('Kal','Lam',35,'DSIO');


echo $entreprise->ajouterEmploye($patron);
$entreprise->ajouterEmploye($employe);
$entreprise->ajouterEmploye($employe2);
$entreprise->ajouterEmploye($chef);


/*$entreprise->prenseterPersonnels();

echo PHP_EOL;
echo $entreprise->ajouterEmploye($patron2);
echo $entreprise->retrouverPatron()->getNom();
echo PHP_EOL;

echo $employe->getSalaire();
echo PHP_EOL;
echo $entreprise->retrouverPatron()->getSalaire();
echo PHP_EOL;*/
echo $chef->getSalaire();

print_r($entreprise->findAllSalaireBySalarie());



/*print_r($entreprise->listEmployes());*/