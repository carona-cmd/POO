<?php

require_once 'shortPasswordException.php';


function updatePassword(string $password): void
{
    if (strlen($password) < 10) {
        throw new shortPasswordException($password);
    }
    if (ctype_alnum($password)) {
        throw new Exception('le mot de pass doit contenir au moins un caractère');
    }
}

try {
    updatePassword('ersesr ');
} //catch (shortPasswordException $exception) {
    catch (shortPasswordException $exception){

     var_dump($exception->password);



}
echo 'Bonjour';

