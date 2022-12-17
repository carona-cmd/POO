<?php
echo "<h1>Singleton</h1>";
// appel du singleton
include 'vendor/singleton.php';

// 5 instances pour vérifier que le compteur ne bouge pas.
$instance1 = Vendor\Singleton::getInstance();
echo $instance1->getNumber() .'<br>';

$instance2 = Vendor\Singleton::getInstance();
echo $instance2->getNumber() .'<br>';

$instance3 = Vendor\Singleton::getInstance();
echo $instance3->getNumber() .'<br>';

$instance4 = Vendor\Singleton::getInstance();
echo $instance4->getNumber() .'<br>';

$instance5 = Vendor\Singleton::getInstance();
echo $instance5->getNumber() .'<br>';