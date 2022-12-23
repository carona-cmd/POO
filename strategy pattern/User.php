<?php

require_once 'Logger.php';

class User implements SplSubject

{
    public string $username;
    public SplObjectStorage $observers;
    public LoggerInterface $logger;
    public function __construct(string $username, )
    {
        $this->username = $username;

        $this->notifier = $notifier;
        $this->observers = new SplObjectStorage();
    }
    public function setLogger(LoggerInterface $logger )
    {
        $this->logger= $logger;
    }
    public function sayHello(): string
    {
        if ($this->logger!==null){
            $this->logger->log($this->username . 'dit Bonjour');
        }

        return 'Bonjour' . $this->username;
    }
    public function subscribe():void
    {
        // processus d inscription

        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
         $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->update($this);
        }
    }
}


