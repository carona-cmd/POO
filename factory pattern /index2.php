<?php
require_once 'LoggerFactory.php';

$loggerFactory = new LoggerFactory();
$logger = $loggerFactory->createLogger();


$logger->log('je suis sur index 2');
