<?php

function sayHello(array $user): void
{
    if (!isset($user['civility']) || (!isset($user['name']) || (!isset($user['surname'])))){
        echo 'Erreur : on ne passe pas un utilisateur';
    } else {
        echo 'bonjour' . $user['civility'] . ' ' . $user['name'] . ' ' . $user['surname'];
    }
}
require_once 'class /user.php';

$user1 = new User(civility: 'Mrs', surname: 'dupont', name: 'laure');
$user2 = new User(civility: 'M', surname: 'doe', name: 'john');
// ici en appelant la fonction user en realité on appelle la fonction __construct de notre classe user,
// cela se fait de manière automatique
$user1->sayHello();
echo'<br>';
$user2->sayHello();