<?php

class Logger
{

  public function log(string $message):void
  {
      file_put_contents(date('Y-m-d').'.log',$message,FILE_APPEND);
  }
}