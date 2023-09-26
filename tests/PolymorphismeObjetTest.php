<?php
// AUtoloading
require "./vendor/autoload.php";

use App\Employe;
use App\Patron;
use App\ChefService;

/**
 * @param Employe $employe
 * @return void
 */
function test (Employe $employe) :void {
    if($employe instanceof Employe){
        echo "Est objet de la classe employé\n";
    }

    if($employe instanceof Patron){
        echo "Est objet de la classe patron\n";
    }

    if($employe instanceof ChefService){
        echo "Est objet de la classe chefService\n";
    }
}


$employe = new Employe('Georges','Samir',23);
test($employe);
echo "------------------------\n";
$patron = new Patron('Idriss','Rakoto',28,'Toyota');
test($patron);
echo "------------------------\n";
$chef = new ChefService('Kal','Lam',35,'DSIO');
test($chef);
echo "------------------------\n";
