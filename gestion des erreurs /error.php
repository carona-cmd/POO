<?php
function updatePassword(string $password):void
{
    if (strlen($password)< 10 ){
        throw new Exception(  'Le mot de pass est trop court ');
    }
    if (ctype_alnum($password)){
        throw new Exception('le mot de pass doit contenir au moins un caractère');
    }
}

updatePassword('coucou');


