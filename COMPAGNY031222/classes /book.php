<?php

require_once 'Product.php';

class Book extends Product
{
    public string $author;
    public int $pagesNumber;

    public function __construct(float $price, string $title, string $author, int $pagesNumber)
    {
        // Le titre du livre correspond à la propriété "name" de notre produit
        parent::__construct($price, $title);
        $this->author = $author;
        $this->pagesNumber = $pagesNumber;
    }

    // Implémentation de l'interface :
    public function getTitle(): string
    {
        return $this->name . ', de ' . $this->author;
    }

    public function getDescription(): string
    {
        return 'un livre de ' . $this->author . 'de' . $this->pagesNumber . 'pages';
    }

    public function getFullPrice(): float
    {
        return $this->price * 1.2;
    }
}


