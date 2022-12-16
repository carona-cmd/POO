<?php
//Fichier Person.php
require_once 'Descriptable.php';

abstract class Person implements Descriptable
{
    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFullName()
    {
        return $this->lastName . ' ' . $this->firstName;
    }

    public function getTitle(): string
    {
        return $this->getFullName();
    }
}