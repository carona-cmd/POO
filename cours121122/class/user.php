<?php
class User {
    public string $civility;
    public string $surname ='Doe';
    public string $name;

    /**
     * @param string $civility
     * @param string $surname
     * @param string $name
     */
    public function __construct(string $civility, string $surname, string $name)
    {
        $this->civility = $civility;
        $this->surname =$surname;
        $this->name = $name;
    }

    public function sayHello () :void
    {
     echo 'bonjour' .  $this->civility . ' ' . $this->name . ' '. $this->surname ;

    }

// public sert a declarer des propriétés et de smethodes
// $this est une variable injectée automatiquement dans notre methode
// $this est l objet cuorant qui appelle la methode
//// john doe et laure dupont vont appeller la methode
}