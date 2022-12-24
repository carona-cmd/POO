<?php

class SMSIsReceived implements SplObserver
{
    // le but de cet événement est d'informer l'utilisateur de la bonne remise du message
    public function update(SplSubject $notification)
    {
        echo sprintf('Message remis <br/>');
    }
}