<?php
include 'vendor/factory.php';
include 'vendor/Adaptateur_Fichier1.php';
include 'vendor/Adaptateur_Fichier2.php';
include 'vendor/Adaptateur_Fichier3.php';

try
{
	$obj1 = Factory::getInstance('Adaptateur_')->Fichier1('une souris verte', 'qui courait...');
	$obj1->test();

	$obj2 = Factory::getInstance('Adaptateur_')->Fichier2('une poule...', 'qui picorait...');
	$obj2->test();
	
	$obj3 = Factory::getInstance('Adaptateur_')->Fichier3('maitre renard', 'maitre corbeau...');
	$obj3->test();

}
catch(Exception $e)
{
	echo $e->getMessage();
}