<?php
require_once 'DatabaseLogger.php';
require_once 'Logger.php';
require_once 'DatabaseManager.php';

class LoggerFactory
{
    public DatabaseManagerInterface $databaseManager;
    private DatabaseManagerFactory $databaseLogger;
    private Logger $logger;
    public function __construct(DatabaseManagerInterface $databaseManager)
    {
        $this->databaseManager = $databaseManager;
        $this->databaseLogger = new DatabaseLogger();
        $this->logger = new Logger();
    }

    public function createLogger() : LoggerInterface
 {
     if ($this->databaseManager->isDatabaseConnected()){
         return new DatabaseLogger ();
     } else return new $this->Logger();
 }
}