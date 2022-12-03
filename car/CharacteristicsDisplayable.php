<?php
// Fichier CharacteristicsDisplayable.php
interface CharacteristicsDisplayable
{
// On vient définir notre fonction getCharacteristics() qui devra être présente dans les classes Car et Tire.
    public function getCharacteristics(): array;
}
