<?php
require_once 'Product.php';

class HardDrive extends Product
{
    public int $capacity;
    public string $brand;

    public function __construct(float $price, string $name, int $capacity, string $brand)
    {
        parent::__construct($price, $name);
        $this->capacity = $capacity;
        $this->brand = $brand;
    }


    // Implémentation de l'interface :
    public function getTitle(): string
    {
        return $this->name.' - '.$this->capacity.' Go';
    }

    public function getDescription(): string
    {
        return 'Disque dur '.$this->name.' de la marque '.$this->brand.' ayant une capacité de stockage de '.$this->capacity.' Go';
    }

    public function getFullPrice(): float
    {
        return $this->price * 1.055;
    }
}