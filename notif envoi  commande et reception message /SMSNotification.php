<?php

class SMSNotification extends Notification implements SplSubject
{
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();;
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
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    protected function send(string $recipient, string $message)
    {
        echo sprintf("SMS envoyé au %s contenant le message %s <br/>", $recipient, $message);
        $this->setReceived((bool)rand(0, 1));
    }

    public function setReceived(bool $isReceived)
    {
        if ($isReceived) {
            // on ne déclenche l'événement que si le message a bien été reçu
            $this->notify();
        }
    }
}
