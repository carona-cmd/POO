<?php

// Fichier ElectricCar.php
/*require_once 'Car.php';

class ElectricCar extends Car
{
    public float $batteryAutonomy;

    public function __construct(float $price, string $brand, float $batteryAutonomy)
    {
        parent::__construct($price, $brand);
        $this->batteryAutonomy = $batteryAutonomy;
    }
}*/
// Fichier ElectricCar.php
require_once 'Car.php';

class ElectricCar extends Car
{
    public float $batteryAutonomy;

    public function __construct(float $price, string $brand, float $batteryAutonomy)
    {
        parent::__construct($price, $brand);
        $this->batteryAutonomy = $batteryAutonomy;
    }

    public function getCharacteristics(): array
    {
// Ici, on fait appel à la fonction qui se situe dans l'objet parent (Car)
        $characteristics = parent::getCharacteristics();
// Lors de l'appel de la fonction, on ajoute un champ à notre tableau qui est,
// comme son nom l'indique : batteryAutonomy. Et qui va venir utiliser le troisième paramètre passé
        // à la fonction __construct et l'ajouter dans le champs "batteryAutonomy" que l'on crée grâce à :
        $characteristics['batteryAutonomy'] = $this->batteryAutonomy;

        return $characteristics;
    }
}