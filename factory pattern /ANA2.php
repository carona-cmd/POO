<?php
/* 3 classes représentant les animaux suivants : Cat / Dog / Horse.

Ces classes implémenteront l'interface suivante afin de retourner le nom du cri de chaque animal.
Mettez en place une classe supplémentaire AnimalFactory implémentant le pattern Factory et permettant d'instancier
et de retourner, pour un type d'animal donné, l'objet correspondant grâce à une méthode load.
Si l'on essaie d'instancier un type d'animal n'ayant pas été défini, une erreur sera déclenchée
et sera correctement interprétée.
Voici les types d'animaux que vous devrez vérifier :
$animalTypes = ['horse', 'dog', 'mice', 'cat', 'lion'];*/
require_once 'AnimalFactory.php';

$animalTypes = ['horse', 'dog', 'mice', 'cat', 'lion'];

foreach ($animalTypes as $animalType) {
    try {
        $animal = AnimalFactory::load($animalType);
        echo sprintf("%s : %s <br/>", $animalType, $animal->getSoundType());
    } catch (Exception $e) {
        echo sprintf("%s : cet animal n'a pas été implémenté dans le système <br/>", $animalType);
    }
}