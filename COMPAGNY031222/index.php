<?php


// Fichier index.php
/*require_once 'Seller.php';
require_once 'Company.php';
require_once 'Product.php';

$user = new User('John', 'Doe');
$company = new Company('JD', 'SARL', 'composants informatiques');
$seller = new Seller('Laure', 'Dupond', $company);
$product = new Product('Carte mère', 'Socket LGA1151');*/


// Fichier index.php

/*require_once 'tooltip.php';
require_once 'Company.php';
$company = new Company('JD', 'SARL', 'les composants informatiques');
displayTooltip($company);*/

/*require_once 'Seller.php';
require_once 'Product.php';
require_once 'tooltip.php';
require_once 'Company.php';
require_once 'classes/hardDrive.php';

function displayFullPrice(Product $product): void
{
    echo $product->getFullPrice().'euros';
}

$company = new Company('JD', 'SARL', 'les composants informatiques');
$user = new User('John', 'Doe');
$seller = new Seller('Laure', 'Dupond', $company);
$hardDrive = new HardDrive('RB-ROCKET', 120, 1, 'Sabrent');
echo $hardDrive->price;

displayFullPrice(
    $hardDrive
);

// on ne peut pas instancier une classe abstraite
//$product = new Product('Carte mère', 'Socket LGA1151');

//displayTooltip($company);
//displayTooltip($user);
//displayTooltip($seller);
//displayTooltip($product);*/


// Fichier index.php

require_once 'tooltip.php';
require_once 'Book.php';
require_once 'HardDrive.php';

$mobyDick = new Book(19.99, 'Moby Dick', 'Herman Melville', 752);
$hardDrive = new HardDrive(49.90, 'BarraCuda', 1000, 'Seagate');
displayTooltip($mobyDick);
displayTooltip($hardDrive);