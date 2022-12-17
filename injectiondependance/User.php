<?php

require_once 'Logger.php';

class User
{
    public string $username;
    public LoggerInterface $logger;

    public function __construct(string $username ,LoggerInterface $logger  )
    {
        $this->username = $username ;
        $this->logger = $logger;
        $this->logger->log('Utilisateur'.$this->username. 'créé');
    }

    public function sayHello(): string
    {
        $this->logger->log($this->username.'dit Bonjour');
        return 'Bonjour'.$this->username;
    }

}