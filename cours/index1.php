<?php

// fichier index.php
include 'moto.php';
include 'race.php';

$moto1 = new Moto("Yamaha", "rouge", 210);
$moto2 = new Moto("Suzuki", "bleue", 180);

$race = new Race($moto1, $moto2);
echo $race->startRace()->getDescription();
// cette ligne va donc lancer la fonction startRace dans la classe Race puis retourner
// la description de la moto qui aura gagné la course. Pour rappel, la fonction startRace
// va retourner une moto gagnante (class Moto) et la fonction getDescription
// est présente dans la classe Moto.