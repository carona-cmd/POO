<?php
require_once 'logFile.php';

$file = new logFile(fileName: 'log.txt');
$file -> write (content:'bonjour');
$file->fileResource(ressource:null )
    ->setUsername(Username:'john')
    ->setIpaddress('1.2.3.4')
    ->write(content:'bonjour john!');

$file->close();


