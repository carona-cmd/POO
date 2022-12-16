<?php

function updatePassword(string $password): void
{
    if (strlen($password) < 10) {
        throw new Exception('Le mot de pass est trop court ');
    }
    if (ctype_alnum($password)) {
        throw new Exception('le mot de pass doit contenir au moins un caractère');
    }
}

try {
    updatePassword('coucoudrdsdfeg ');
} catch (Exception $exception) {
    echo 'Merci de ressaisir votre mot de passe';
    throw $exception;
} finally {
    echo 'Mon message';
}
 echo'Bonjour';

