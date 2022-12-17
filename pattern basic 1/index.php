<?php
//require_once 'User.php';
//$logger  = new Logger();
//$logger->
//echo User::$count.<br>;
//$john =new User('john');
//echo User::$count.<br>;
//$laure = new User ('laure');
//echo $john->sayHello();


//creation d un fichier .log
/*require_once 'Logger.php';
$logger = new Logger ();
$logger->log('Test de log');*/

require_once 'User.php';
$john = new User ('john');
$laure = new User('laure');

echo $john->sayHello();
echo '<br>';
echo $laure->sayHello();
$samantha = new User ('samantha');