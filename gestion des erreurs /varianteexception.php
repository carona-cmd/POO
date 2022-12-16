<?php


function updatePassword(string $password): void
{
    if (strlen($password) < 10) {
        throw new invalidArgumentException ('Le mot de pass est trop court ',30);
    }
    if (ctype_alnum($password)) {
        throw new Exception('le mot de pass doit contenir au moins un caractère');
    }
}

try {
    updatePassword('coucoudfhdhxfdd');
} catch ( invalidArgumentException $exception) {
    echo 'Merci de ressaisir votre mot de passe';
    // echo $exception->getMessage();
    //echo $exception->getCode();
    var_dump($exception->getTrace());

} catch(Exception $exception){
    echo 'une exception a été levée';
}
echo 'Bonjour';

