<?php

class NotificationFactory
{

    public static function createNotification(string $contactType)
    {
        switch ($contactType) {
            case 'sms':
                $smsNotification = new SMSNotification();
                // On attache un type d'événement à notre notification après l'avoir instanciée
                $smsNotification->attach(new SMSIsReceived());
                return $smsNotification;
                break;
            case 'email':
            default:
                return new EmailNotification();
        }
    }
}