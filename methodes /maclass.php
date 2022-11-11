<?php


class MaClasse
{
    public string $propriete;

    public function maMethode(): void
    {
        echo $this->propriete;
    }
}

$objet = new MaClasse();
$objet->propriete = 'valeur';
$objet->maMethode(); // Affiche "Valeur"