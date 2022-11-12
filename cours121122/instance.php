<?php


class MaClasse
{
    public int $propriete1;
    public string $propriete2;
}

$objet = new MaClasse(); // On crée un objet à partir d'une classe
$objet->propriete1 = 'valeur'; // Affectation
echo $objet->propriete1; // Affiche 'valeur'