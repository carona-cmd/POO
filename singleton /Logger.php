<?php

class Logger
{
    private static Logger $instance;
    //private function __construct()
    //{
    //}
   // private function __clone()
   // {
   // }
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