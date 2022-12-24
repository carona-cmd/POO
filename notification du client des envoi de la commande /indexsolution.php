<?php

require_once 'Notification.php';
require_once 'NotificationFactory.php';
require_once 'EmailNotification.php';
require_once 'SMSNotification.php';
require_once 'Client.php';


$message = "Commande expédiée";
$clientsToNotifyToNotify = [];

$clientsToNotify[] = new Client("Karine", "email", "karine@mail.fr", "01.02.03.04.05.06");
$clientsToNotify[] = new Client("Julien", "sms", "julien@mail.fr", "01.02.03.04.05.07");
$clientsToNotify[] = new Client("Karim", "sms", "karim@mail.fr", "01.02.03.04.05.08");
$clientsToNotify[] = new Client("Justine", "email", "justine@mail.fr", "01.02.03.04.05.09");


foreach ($clientsToNotify as $client) {
    $notification = NotificationFactory::createNotification($client->contactWith);
    $notification->manageNotification($client->getContactInformation(), $message);
}
/*Reprenez le code présent dans la solution ci-dessus.

Lorsqu'une notification de type SMS est envoyée, nous souhaitons être informés du fait que celui-ci
a bien été remis à son destinataire.

Implémentez la structure nécessaire à la mise en œuvre de ce système. Une méthode setReceived
(bool $isReceived) permettra de déclencher un changement d'état de cet objet.

Par simplification, on appellera la méthode sous cette forme $this->setReceived((bool) rand(0, 1));
au sein de la méthode send de l'objet représentant la notification SMS.*/