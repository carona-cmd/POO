<?php
require_once File.php;
class logFile  extends File {
    protected string $username ='';
    protected string $ipAddress ='';

    public function write(string $content): bool
    {
        return parent::write($content.PHP_EOL);
    }

    public function getUsername(string $username) :void
    {
        if($this->getUsername()!== null && $this-> getIpaddress()!== null){
            $content = 'bonjour';
            $content = '['.$this->getUsername().'-'.$this->getIpaddress().']'.$content;
            return $username . $content;
        }

    }


    public function setUsername(string $username):  self//logFile retourne l'objet actuel
    {
        $this->username =$username;
        return $this;
    }


    protected function getIpaddress(): string // on peut verifier si elle est présente
    {
        return $this->ipAddress;
    }

    public function setIpaddress(string $ipaddress): self// désigne le type de l'objet courant
    {
        $this->ipAddress = $ipaddress;
        return $this;
    }
    public function setFileRessource($ressource):self
    {
        if (is_ressource($ressource) ) {

           $this->fileResource =$ressource;
        }
        return $this;
    }


}