<?php

try {
    processForm();
} catch (InvalidUserException $exception) {
    echo $exception->getMessage() . "<br/>";
}


function processForm()
{
    $user = new User();
    $formFields = ['name', 'birthDate', 'email', 'password', 'comment'];

    foreach ($formFields as $field) {
        try {
            $user->{'set' . ucfirst($field)}($_POST[$field]);
        } catch (Exception $exception) {
            echo $exception->getMessage() . "<br/>";
        }
    }

    if (!$user->isFull()) {
        throw new InvalidUserException('Une erreur est survenue : l\'utilisateur est incomplet');
    }

    echo 'Utilisateur complet';
}

/**
 * Class InvalidUserException
 *
 * Exception métier lorsqu'un objet User est invalide
 */
class InvalidUserException extends Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }
}

/**
 * Class InvalidContentTypeException
 *
 * Exception lorsqu'un type de contenu n'est pas valide
 */
class InvalidContentTypeException extends Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }
}

/**
 * Class InvalidDateTimeException
 *
 * Exception lorsqu'une date est invalide
 */
class InvalidDateTimeException extends Exception
{
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }
}

/**
 * Class User
 */
class User
{
    private $name;

    private $birthDate;

    private $email;

    private $password;

    private $comment;

    public const NAME_MAX_LENGTH = 20;

    public const AGE_MIN_VAL = 18;

    public const PASSWORD_MIN_LENGTH = 6;

    public const COMMENT_MAX_LENGTH = 200;

    public function setName(string $name)
    {
        if (strlen($name) > self::NAME_MAX_LENGTH) {
            // PHP implémente nativement certaines exceptions, autant les utiliser
            throw new LengthException("La propriété name ne peut excéder " . self::NAME_MAX_LENGTH . " caractères");
        }

        if (!ctype_alpha($name)) {
            throw new InvalidContentTypeException("La propriété name ne peut contenir que des lettres");
        }

        $this->name = $name;
    }

    public function setBirthDate(string $birthDate)
    {
        if (!date_create($birthDate)) {
            throw new InvalidDateTimeException('La date de naissance n\'a pas pu être identifiée');
        }

        $birthDate = date_create($birthDate);
        $now = date_create();

        if ($birthDate > $now) {
            throw new InvalidDateTimeException('La date de naissance ne peut se situer dans le futur');
        }

        if (date_diff($birthDate, $now)->y < self::AGE_MIN_VAL) {
            throw new InvalidDateTimeException('Vous devez être majeur pour valider ce formulaire');
        }

        $this->birthDate = $birthDate;
    }

    public function setEmail(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidContentTypeException("La propriété email est invalide");
        }

        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        if (strlen($password) < self::PASSWORD_MIN_LENGTH) {
            throw new LengthException("La propriété password ne peut excéder " . self::PASSWORD_MIN_LENGTH . " caractères");
        }

        if (!ctype_alnum($password)) {
            throw new InvalidContentTypeException("La propriété password ne peut contenir que des lettres ou des chiffres");
        }

        $this->password = $password;
    }


    public function setComment(?string $comment)
    {
        if (strlen($comment) > self::COMMENT_MAX_LENGTH) {
            throw new LengthException("La propriété comment ne peut contenir plus de " . self::COMMENT_MAX_LENGTH . " caractères");
        }

        $this->comment = $comment;
    }

    public function isFull()
    {
        return !empty($this->name) && !empty($this->password) && !empty($this->birthDate) && !empty($this->email);
    }

}