<?php


class SMSNotification extends Notification
{
    protected function send(string $recipient, string $message)
    {
        echo sprintf("SMS envoyé au %s contenant le message %s <br/>", $recipient, $message);
    }
}