<?php

abstract class Notification
{
    // Tout type de notification doit implémenter une méthode send()
    protected abstract function send(string $recipient, string $message);

    public function manageNotification($recipient, $message)
    {
        $this->send($recipient, $message);
    }
}