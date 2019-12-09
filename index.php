<?php
include('Animal.php');
include('Mammal.php');
include('Raccoon.php');


$racoon = new Raccoon(2, 6, 63, 4, 'енот-полоскун', 'коричнево-серый');

print_r($racoon->getWeight()) ; 

print_r(get_object_vars($racoon));
print_r($racoon);
