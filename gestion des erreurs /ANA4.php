<?php
//Le code suivant doit permettre de supprimer un objet de type User.
//
//On considère qu'il n'est pas possible de supprimer un utilisateur s'il est administrateur,
// auquel cas une exception est levée.


function removeUser(User $user)
{
    if ($user->isAdmin()) {
        throw new Exception('Vous ne pouvez pas supprimer un administrateur');
    }

    // code métier qui supprime un utilisateur
    return true;
}

$user1 = new User('Anthony', [User::ROLE_ADMIN]);
$user2 = new User('Camille', [User::ROLE_USER]);

$usersToRemove = [$user1, $user2];

foreach ($usersToRemove as $user) {
    removeUser($user);
}

class User
{
    public $name;

    public $roles = [];

    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const ROLE_USER = 'ROLE_USER';

    public function __construct(string $name, array $roles)
    {
        $this->name = $name;
        $this->roles = $roles;
    }

    public function isAdmin()
    {
        return in_array(self::ROLE_ADMIN, $this->roles);
    }
}
//Mettez en place la syntaxe permettant d'attraper l'exception levée lorsque la fonction removeUser est appelée.
//
//Que l'utilisateur ait pu ou non être supprimé, vous afficherez le message "Utilisateur traité".