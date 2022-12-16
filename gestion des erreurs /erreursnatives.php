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
    updatePassword( );
} catch ( invalidArgumentException $exception) {
    echo 'Merci de ressaisir votre mot de passe';
    // echo $exception->getMessage();
    //echo $exception->getCode();
    var_dump($exception->getTrace());

} catch(Error $error){
    echo $error->getMessage();
} catch(ArgumentCountError $error){
    echo $exception->getMessage();
}
echo 'Bonjour';

