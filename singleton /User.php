<?php

require_once 'Logger.php';

class User
{
    public string $username;
    public Logger $logger;

    //public static int $count= 0;//tous les objets vint avoir le même count



    public function __construct(string $username  )
    {
        //self::$count++;
        $this->username = $username ;
        $this->logger->Logger:: getInstance();
        $this->logger->log('Utilisateur'.$this->username. 'créé');
    }
    public function sayHello(): string
    {
        $this->logger->log($this->username.'dit Bonjour');
        return 'Bonjour'.$this->username;
    }

}