<?php


// Fichier carFunctions.php
/*require_once 'car.php';

function displayCharacteristics(Car $car): void
{
    echo '<ul>';

// Cette boucle va servir à prendre chaque champ du tableau que retourne la fonction getCharacteristics()
// et à les intégrer dans une balise <li> sous le format que l'on souhaite leur donner. Ici, "$name : $value"

    foreach ($car->getCharacteristics() as $name => $value) {
        echo '<li>' . $name . ' : ' . $value . '</li>';
    }
    echo '</ul>';
}*/
// Fichier carFunctions.php
require_once 'CharacteristicsDisplayable.php';

function displayCharacteristics(CharacteristicsDisplayable $characteristicsDisplayable): void
{
    echo '<ul>';
    // Cette boucle va venir chercher TOUS les champs trouvable avec la fonction getCharacteristics() qui se situe dans le fichier characteristicsDisplayable (pour rappel, nous avons utiliser la fonction aussi bien dans le fichier Car que dans le fichier Tire) et les afficher sous le forme que nous souhaitons lui donner, ici, une liste à puce qui regroupe donc le nom du champ ainsi que la valeur de celui-ci.
    foreach ($characteristicsDisplayable->getCharacteristics() as $name => $value) {
        echo '<li>'.$name.' : '.$value.'</li>';
    }
    echo '</ul>';
}
