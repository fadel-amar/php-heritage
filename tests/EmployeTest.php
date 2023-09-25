<?php
// AUtoloading
require "./vendor/autoload.php";

$employe = new \App\Employe('Gonzalo','Ramos', '28');
echo $employe->presenter();