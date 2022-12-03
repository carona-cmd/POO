<?php

// Fichier index.php
/*require_once 'ElectricCar.php';
require_once 'GasolineCar.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);
/*Lorsque nous allons afficher la fiche produite de l'une de nos voitures sur notre application,
les différentes caractéristiques seront affichées dans une liste à puces avec leurs valeurs associées.
Afin de gérer cela simplement du côté front, nous allons créer une fonction qui retourne un tableau
associatif ayant pour clé le nom de la caractéristique et pour valeur la valeur de caractéristique.

Créez une fonction getCharacteristics retournant les caractéristiques de chaque type de voiture.
Pour une voiture électrique, nous aurons besoin de son prix, sa marque et l'autonomie de sa batterie ;
 et pour une voiture à essence, son prix, sa marque et la quantité d’émission de CO2.

Attention : nous pourrions rajouter des caractéristiques à une voiture dans des évolutions futures,
 donc évitez la duplication de code qui rendrait l'application difficilement maintenable.*/



// Fichier index.php

/*require_once 'ElectricCar.php';
require_once 'GasolineCar.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);

var_dump($tesla->getCharacteristics());
var_dump($renault->getCharacteristics());
/*Écrivez maintenant une fonction displayCharacteristics prenant en paramètre une voiture,
 quelle qu'elle soit, et qui affiche la liste de ses caractéristiques dans une liste à puces.

*/
// Fichier index.php
require_once 'ElectricCar.php';
require_once  'GasolineCar.php';
require_once  'carFunctions.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);

displayCharacteristics($tesla);
displayCharacteristics($renault);