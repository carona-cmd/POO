<?php


require_once 'LoggerInterface.php';
class Logger implements LoggerInterface
{
    private static Logger $instance;

    public static function getInstance(): Logger
    {
        if(!isset (self::$instance )){
            self::$instance = new logger();
        }

        return self::$instance;
    }
    public function log(string $message):void
    {
        file_put_contents(date('Y-m-d').'.log',$message,FILE_APPEND);
    }
}