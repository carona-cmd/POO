<?php


class AnimalFactory
{
    /**
     * @param string $animalType
     * @return AnimalInterface
     * @throws Exception
     */
    public static function load(string $animalType): AnimalInterface
    {
        switch ($animalType) {
            case 'dog':
                return new Dog();
                break;
            case 'cat':
                return new Cat();
                break;
            case 'horse':
                return new Horse();
                break;
            default:
                throw new Exception();
                break;
        }
    }
}
