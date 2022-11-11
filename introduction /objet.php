<?php


function sayHello(array $user): void
{
    echo 'Bonjour ' . $user['name'] . ' ' . $user['surname'];
}

include("functions/userLoading.php");

$user1 = loadUser(1);
$user2 = loadUser(2);

sayHello($user1); // Affiche "Bonjour Robert Dupont"
sayHello($user2); // Affiche "Bonjour Laure Dupond"










