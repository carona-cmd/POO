<?php
class User// gens qui vont acheter sur notre site: classe mère: on ne la modifie pas
{
    public string $username;// propriété
    public string $email;//propriété
    // php genere une construct pour moi: je clqiue droit je choisis generate et je choisis les 2 var
// ou alt insert
    /**
     * @param string $username
     * @param string $email
     */
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    // on definit une méthode dans notre classe utilisateur , cette méthode nous permet
    // de recuperer son nom d affichage  , elle retourne une chaine
    // d utilisateur et ce sera la concatenation du name et du surname

    public function getDisplayName(): string
    {
        return $this->username.'('.$this->email.')';
    }
}
