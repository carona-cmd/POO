<?php


class User
{
    public int $id;
    public string $name = 'John';
    public string $surname;

    // On déclare notre constructeur
    public function __construct(string $name, string $surname)
    {
        $this->name = $name; // La propriété "name" de l'objet courant prend la valeur du paramètre $name
        $this->surname = $surname; // La propriété "surname" de l'objet courant prend la valeur du paramètre $surname
    }

    public function sayHello(): string
    {
        return 'Bonjour ' . $this->name . ' ' . $this->surname;
    }
}


$laure = new User('Laure', 'Dupond'); // On passe directement nos valeurs dans la "fonction" User, dans le même ordre que celui défini dans le constructeur
$robert = new User('Robert', 'Rondon');
// Nos objets sont instanciés en une seule ligne !

echo $robert->sayHello(); // Affiche bien "Bonjour Robert Rondon"


// explication constructor
class User
{
    public string $civility ;
    public string $name ;
    public string $surname;

    // On déclare notre constructeur
    public function __construct(string $civility, string $name, string $surname)
    {

        $this-> civility = $civility;
        $this->name = $name; // La propriété "name" de l'objet courant prend la valeur du paramètre $name
        $this->surname = $surname; // La propriété "surname" de l'objet courant prend la valeur du paramètre $surname
    }

    public function sayHello(): string
    {
        return 'Bonjour ' . $this->name . ' ' . $this->surname;
    }
}
// ce n est pas dans constructor
$laure = new User('Laure', 'Dupond'); // On passe directement nos valeurs dans la "fonction" User, dans le même ordre que celui défini dans le constructeur
$robert = new User('Robert', 'Rondon');
// Nos objets sont instanciés en une seule ligne !

echo $robert->sayHello(); // Affiche bien "Bonjour Robert Rondon"