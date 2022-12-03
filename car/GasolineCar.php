<?php

// Fichier GasolineCar.php
/*require_once 'Car.php';

class GasolineCar extends Car
{
    public float $co2Emission;

    public function __construct(float $price, string $brand, float $co2Emission)
    {
        parent::__construct($price, $brand);
        $this->co2Emission = $co2Emission;
    }
}*/

// Fichier GasolineCar.php
require_once 'car.php';

class GasolineCar extends Car
{
    public float $co2Emission;

    public function __construct(float $price, string $brand, float $co2Emission)
    {
        parent::__construct($price, $brand);
        $this->co2Emission = $co2Emission;
    }

    public function getCharacteristics(): array
    {
        // Ici, on fait appel à la fonction qui se situe dans l'objet parent (Car)
        $characteristics = parent::getCharacteristics();
        // Lors de l'appel de la fonction, on ajoute un champ à notre tableau qui est,
        // comme son nom l'indique : co2Emission. Et qui va venir utiliser le troisième paramètre passé
        // à la fonction __construct et l'ajouter dans le champs "co2Emission" que l'on crée grâce à :
        $characteristics['co2Emission'] = $this->co2Emission;
        return $characteristics;
    }
}