<?php

class EmailNotification extends Notification
{
    protected function send(string $recipient, string $message)
    {
        echo sprintf("Email envoyé au %s contenant le message %s  <br/>", $recipient, $message);
    }
}