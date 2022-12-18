<?php

class Dog implements AnimalInterface
{
    public function getSoundType(): string
    {
        return 'Aboiement';
    }
}