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

$john = new User (username:'john');


//si on utiliser un $this->notify
//il faut creer un observer de type subscription adminnotifier
$notifierObserver = new SubscriptionAdminNotifierObserver(new AdminNotifier());
$loggerObserver = new SubscriptionLoggerObserver($logger);
$john->attach($notifierObserver);
$john->attach($loggerObserver);
$john->setLogger($logger);
$john->subscribe();

$john->setLogger(new Logger());
$john->sayHello();