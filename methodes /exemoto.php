<?php

// fichier index.php
require_once 'Moto.php';

$moto = new Moto();
echo $moto->brand = "Yamaha";
echo $moto->color = "rouge";
echo $moto->maxSpeed = 210;

// fichier Créez maintenant une "Suzuki" "bleue" allant à 220 km/h maximum.

$moto = new Moto();
echo $moto->brand = "suzuki";
echo $moto->color = "bleue";
echo $moto->maxSpeed = 210;