<?php


/**
 * Interface AnimalInterface
 */
interface AnimalInterface
{
    public function getSoundType(): string;
}

/**
 * Class Dog
 */
class Dog implements AnimalInterface
{
    public function getSoundType(): string
    {
        return 'Aboiement';
    }
}

/**
 * Class Cat
 */
class Cat implements AnimalInterface
{
    public function getSoundType(): string
    {
        return 'Miaulement';
    }
}

/**
 * Class Horse
 */
class Horse implements AnimalInterface
{
    public function getSoundType(): string
    {
        return 'Hennissement';
    }
}

/**
 * Class AnimalFactory
 */
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

$animalTypes = ['horse', 'dog', 'mice', 'cat', 'lion'];

foreach ($animalTypes as $animalType) {
    try {
        $animal = AnimalFactory::load($animalType);
        echo sprintf("%s : %s <br/>", $animalType, $animal->getSoundType());
    } catch (Exception $e) {
        echo sprintf("%s : cet animal n'a pas été implémenté dans le système <br/>", $animalType);
    }
}