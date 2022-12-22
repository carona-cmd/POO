<?php
require_once 'User.php';
require_once 'LoggerFactory.php';
require_once 'DatabaseManagerFactory.php';
require_once 'SubscriptionAdminNotifierObserver.php';
require_once 'SubscriptionLoggerObserver.php';

$databaseManagerFactory = new DatabaseManagerFactory();
$databaseManager = $databaseManagerFactory>createDatabaseManager("mysql");
$loggerFactory  = new LoggerFactory($databaseManager);
$logger = $loggerFactory->createLogger();

$john = new User ('john',$logger);

//si on utiliser un $this->notify
//il faut creer un observer de type subscription adminnotifier
$notifierObserver = new SubscriptionAdminNotifierObserver(new AdminNotifier());
$loggerObserver = new SubscriptionLoggerObserver($logger);
$john->attach($notifierObserver);
$john->attach($loggerObserver);
$john->subscribe();
/*$laure = new User ('laure', $logger);
echo $john->sayHello();
echo'<br>';
echo $laure->sayHello();
$samantha = new User ('sam', $logger);*/