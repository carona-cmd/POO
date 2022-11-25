<?php

require_once 'classes/User.php';

class Seller extends User// herite de la calsse mere
// vendeur sera un utilisateur mais en plus il y aura le nom de son entreprise

{
    public string $username;
    public string $email;
    public string $companyName;

    /
    public function __construct(string $username, string $email, string $companyName)
    {
        $this->username = $username;
        $this->email = $email;
        $this->companyName = $companyName;
    }

    public function getDisplayName(): string
    {
        return $this->compagnyNmae.'-'.$this->username.'('.$this->email.')';
    }
}