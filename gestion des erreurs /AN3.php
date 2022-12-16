<?php


// On vérifie qu'on a bien deux variables de définies
if (isset($_GET['nombre1']) && isset($_GET['nombre2'])) {
    // On vérifie qu'il s'agit de numériques
    if (is_numeric($_GET['nombre1']) && is_numeric($_GET['nombre2'])) {
        // On vérifie qu'on n'essaie pas de faire une division par zéro
        if ((int)$_GET['nombre2'] !== 0) {
            $division = $_GET['nombre1'] / $_GET['nombre2'];

            echo $division;
        } else {
            echo 'Vous ne pouvez pas diviser un nombre par zéro';
        }
    } else {
        echo 'Vous devez fournir des chiffres';
    }
} else {
    echo 'Vous devez définir deux nombres';
}







