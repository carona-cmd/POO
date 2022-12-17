<?php

require_once 'Logger.php';
class User
{
    public string $username;
    public Logger $logger;

    public function __construct(string $username)
    {
        $this->username = $username;
        $this->logger = new Logger();
        $this->logger->log('Utilisateur'.$this->username.'créé');
    }
    public function sayHello(): string
    {
        $this->logger->log($this->username.'dit Bonjour');
        return 'Bonjour'.$this->username;
    }
}