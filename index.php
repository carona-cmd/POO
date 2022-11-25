<?php


// Fichier index.php
require_once 'electriccar.php';
require_once 'gazoline.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);