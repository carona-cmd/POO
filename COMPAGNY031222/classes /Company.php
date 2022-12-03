<?php


// Fichier Company.php
/*class Company
{
    public string $name;
    public string $type;
    public string $domain;

    public function __construct(string $name, string $type, string $domain)
    {
        $this->name = $name;
        $this->type = $type;
        $this->domain = $domain;
    }
}

*/
// Fichier Company.php

require_once 'Tooltipable.php';

class Company implements Tooltipable
{
    public string $name;
    public string $type;
    public string $domain;

    public function __construct(string $name, string $type, string $domain)
    {
        $this->name = $name;
        $this->type = $type;
        $this->domain = $domain;
    }

    public function getTitle(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->name . ' est une ' . $this->type . ' spécialisée dans ' . $this->domain;
    }
}



