<?php
require_once 'LoggerInterface.php';
class SubscriptionLoggerObserver implements SplObserver //interface fournie nativement par php
{
    public LoggerInterface $logger  ;
    /*declaration for a class property in PHP:The $logger variable is an instance of the LoggerInterface class
    and is marked as public, which means it can be accessed from outside the class.

    The LoggerInterface class is an interface, which is a set of method signatures that a class can implement.
    Interfaces define a set of behaviors that a class must implement, but they do not provide any implementation
    for those behaviors. This allows multiple classes to implement the same interface, and ensures that they all have
    the same set of methods available.*/

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function update(SplSubject $subject) // l'interface observer nous force à déclarer des méthodes
        /*la methode est appelée  update , elle prend un seul argument :l'argument est l instance de la SplSubject class.
        la SplSubject class fait partie de la librairie standard de PHP et elles est une interface qui définit plusieurs
        méthodes qui permettent d utiliser le  Observer design pattern dans PHP.

        The Observer design pattern is a behavioral design pattern that allows an object (called the subject)
        to be observed by one or more other objects (called observers). When the state of the subject changes,
        it automatically notifies all of its observers, so that they can take some action in response.

        In this case, the update method is likely being used as an observer method, which means it will be called whenever
        the state of the $subject object changes. The method is likely responsible for taking some action in response
        to the state change, such as logging the change or updating some other part of the system.*/
    {
   
        $this->logger->log($subject->username . 's\est inscrit');
    }
}