<?php
require "./vendor/autoload.php";

$patron = new App\Patron('Jean', 'Éric', 35,'Bugatti');
echo $patron->presenter();; // Appel à la méthode héritée de la classe Employe
echo PHP_EOL;
echo $patron->deplacer();
