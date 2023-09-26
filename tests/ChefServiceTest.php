<?php
// AUtoloading
require "./vendor/autoload.php";


$chefInfo = new \App\ChefService('Alain','Durand', '35','Informatique');
echo $chefInfo->presenter();
