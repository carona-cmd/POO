<?php


// fichier index.php
require_once 'Moto.php';

$moto = new Moto("Piaggio", "violette", 217);
echo $moto->getDescription();