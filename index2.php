<?php
require_once 'classes/User.php';
require_once 'classes/Seller.php';

function displayUsername (User $user):void
{
    echo 'connecté en tant que : '.$user->getDisplayName();
}
function displayUsername (Seller $seller):void
{
    echo 'connecté en tant que : '.$seller->getDisplayName();
}
$user = new User ( 'john', 'john@doe.fr');
$seller = new Seller('laure','laure@dupont;com', 'SARL LAURE DUPONT');
//echo $user->getDisplayName();
displayUsername($user);
displayUsername($seller);
//echo 'br';
//echo $seller->getDisplayName();

/*function displayUsername(User $user):void
{
    echo 'connecté en tant que :' .$user->getDisplayName();

}

function displaySellerUsername(Seller $seller):void*/
