<?php

class shortPasswordException extends Exception
{
    public string $password ;
    public function __construct(string  $password)
    {
        parent::__construct ('Le mot de passe est trop court!',23);
        $this->password =$password;
    }
}