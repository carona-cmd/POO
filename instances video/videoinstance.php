<?php
function sayHello(array $user): void
{
    if (!isset($user['civility']) || (!isset($user['name']) || (!isset($user['surname'])))){
echo 'Erreur : on ne passe pas un utilisateur';
} else {
    echo 'bonjour' . $user['civility'] . ' ' . $user['name'] . ' ' . $user['surname'];
}
    }
//include ("functions/userLoading.php");
//utilisation de l opérateur flèche
//var_dump($user1);
// user devient une fonction et on ne lui applique pas de paramètres
//$user1 = loadUser(id:1);
//$user2 =loadUser(id:2);

require_once 'class/User.php';
$user1 =new User();
$user2 = new User();
$user1->name= 'john';
$user2->surname= 'dupont';
$user2->name= 'laure';

echo $user1 ->surname . ' ' .$user1->name ;
echo '<br>';
echo $user2 ->surname . ' ' .$user2->name ;
// pour affecter les vraies valeurs et non les valeurs par defaut :
// pour affecter une valeur a une porprité c est comme si on affectait une variable

// point de vigilance quand on affecte une valeur a une propriété par rapport
//a une simple variable : php reprend string et int comme on l a defini

//include ou require , c est mieux require once