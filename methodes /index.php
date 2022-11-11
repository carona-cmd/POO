<?php


// Fichier index.php

require_once 'User.php';

$robert = new User();
$robert->name = 'Robert';
$robert->surname = 'Rondon';

echo $robert->sayHello(); // Affiche "Bonjour Robert Rondon". Lors de l'appel, la variable $this de sayHello
// content
// les valeurs de $robert, puisque c'est cette variable qui appelle la méthode

$laure = new User();
$laure->name = 'Laure';
$laure->surname = 'Dupont';

echo $laure->sayHello(); // Affiche "Bonjour Laure Dupont". Lors de l'appel, la variable $this de sayHello
// contient les valeurs de $laure, puisque c'est cette variable qui appelle la méthode