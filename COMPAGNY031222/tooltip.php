<?php


// Fichier tooltip.php

function displayTooltip(Tooltipable $tooltipable)
{
    echo '<h3>'.$tooltipable->getTitle().'</h3><p>'.$tooltipable->getDescription().'</p>';
}