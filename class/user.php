<?php
class User {
    public string $civility;
    public string $surname ='Doe';
    public string $name;

    public function sayHello () :void
    {
     echo 'bonjour' .  $this->civility . ' ' . $this->name . ' '. $this->surname ;

    }

// public sert a declarer des propriétés et de smethodes
// $this est une variable injectée automatiquement dans notre methode
// $this est l objet cuorant qui appelle la methode
//// john doe et laure dupont vont appeller la methode
}