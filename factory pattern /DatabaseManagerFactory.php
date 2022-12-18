<?php

require_once 'MySQLDatabaseManager.php';
require_once 'DatabaseManager.php';
class DatabaseManagerFactory
{
    public function createDatabaseManager(string $type): DatabaseManagerInterface
    {
        if ($type === 'mysql') {
            return new MySQLDatabaseManager();
        } else {
            return new DatabaseManager();
        }
    }
}