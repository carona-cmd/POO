<?php

class NotificationFactory
{
    // La mise en place du modèle Factory permettra de futures évolutions

    public static function createNotification(string $contactType)
    {
        switch ($contactType) {
            case 'sms':
                return new SMSNotification();
                break;
            case 'email':
            default:
                return new EmailNotification();
        }
    }
}