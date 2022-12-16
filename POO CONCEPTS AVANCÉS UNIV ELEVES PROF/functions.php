<?php

// Fichier functions.php
require_once 'Descriptable.php';

function displayDescription(Descriptable $descriptable)
{
    echo '<h3>' . $descriptable->getTitle() . '</h3><p>' . $descriptable->getDescription() . '</p>';
}