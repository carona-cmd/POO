<?php


// Fichier ElectricCar.php
require_once 'Car.php';

class ElectricCar extends Car
{
    public float $batteryAutonomy;

    public function __construct(float $price, string $brand, float $batteryAutonomy)
    {
        $this->price = $price;
        $this->brand = $brand;
        // La caractéristique batteryAutonomy étant absente d'une voiture éléctrique,
        // on ajoute ce paramètre uniquement lors de la "construction" de l'objet ElectricCar

        $this->batteryAutonomy = $batteryAutonomy;
    }
}