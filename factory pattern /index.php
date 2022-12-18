<?php
require_once 'User.php';
require_once 'LoggerFactory.php';
require_once 'DatabaseManagerFactory.php';

$databaseManagerFactory = new DatabaseManagerFactory();
/** @var TYPE_NAME $databaseManager */
$databaseManager = $databaseManagerFactory>createDatabaseManager("mysql");
$loggerFactory  = new LoggerFactory($databaseManager);
$logger = $loggerFactory->createLogger();

$john = new User ('john',$logger);
$laure = new User ('laure', $logger);
echo $john->sayHello();
echo'<br>';
echo $laure->sayHello();
$samantha = new User ('sam', $logger);