<?php


function updatePassword(string $password): void
{
    if (strlen($password) < 10) {
        throw new Exception('Le mot de pass est trop court ',30);
    }
    if (ctype_alnum($password)) {
        throw new Exception('le mot de pass doit contenir au moins un caractère');
    }
}

try {
    updatePassword('coucou ');
} catch (Exception $exception) {
    echo 'Merci de ressaisir votre mot de passe';
   // echo $exception->getMessage();
    //echo $exception->getCode();
    var_dump($exception->getTrace());

}
echo 'Bonjour';

