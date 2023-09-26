<?php
require "./vendor/autoload.php";

$entreprise = new \App\Entreprise('LDLC', 'Besançon');
$employe = new \App\Employe('Gonzalo','Ramos', '28');
$patron = new \App\Patron('Idriss','Rakoto',28,'Toyota');
$chef = new \App\ChefService('Kal','Lam',35,'DSIO');


$entreprise->ajouterEmploye($employe);
$entreprise->ajouterEmploye($patron);
$entreprise->ajouterEmploye($chef);


$entreprise->prenseterEmployes();
