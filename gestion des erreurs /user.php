<?php

try {
    displayUser(20);
} catch (ParamException $e) {
    echo $e->getMessage();
}

function displayUser($user) {
    if (!is_string($user)) {
        throw new ParamException ('Le paramètre doit être une chaîne de caractères');
    }

    echo "Vous êtes $user";
}
?><?php
