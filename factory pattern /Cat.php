<?php

class Cat implements AnimalInterface
{
    public function getSoundType(): string
    {
        return 'Miaulement';
    }
}