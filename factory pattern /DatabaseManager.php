<?php

require_once 'DatabaseManagerInterface.php';

class DatabaseManager implements DatabaseManagerInterface
{
 public function isDatabaseConnected(): bool
 {
     return true;
 }
}