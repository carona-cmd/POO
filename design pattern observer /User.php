<?php

require_once 'Logger.php';

class User implements SplSubject
    //A class is a blueprint for creating objects, which are instances of the class.
    // blueprint is a detailed plan or model that describes how something should be created or implemented.
    // A class is a template for creating objects,t defines the properties and methods (functions)
    // that the objects will have.
    //When you create an object from a class, you are said to be instantiating the class.
{
    public string $username;
    public SplObjectStorage $observers;
    /*declaration for a class property in PHP. The $observers variable is an instance of the SplObjectStorage class and
     is marked as public, which means it can be accessed from outside the class.

    The SplObjectStorage class is part of the Standard PHP Library (SPL) and is a data structure that allows you to store
     objects in a way that allows you to retrieve them quickly and efficiently. It is particularly useful for
    implementing the Observer design pattern in PHP, as it provides an easy way to store and manage a list of objects
    that are observing a particular subject.

    In this case, the $observers property is likely being used to store a list of objects that are observing some
    subject object. The subject object can then use the SplObjectStorage instance to efficiently manage its list
    of observers and notify them when its state changes.*/
    public LoggerInterface $logger;
   // The class has two public properties: $username and $logger.
    // A property is a variable that is associated with an object or a class.
    // In this case, $username is a string variable and $logger is an object that implements
    // the LoggerInterface interface.
    //The public keyword in front of the properties indicates that they can be accessed from outside the class.

    /*public AdminNotifier $notifier;en utilisant $this ->notify et la methode observer ; on n a plus besoin de
    adminNotifier*/

    //$notifier, is being declared as an instance of the AdminNotifier class. The public keyword indicates that
    // the property is publicly accessible, meaning that it can be accessed from outside the class.
    //
    //The syntax public Type $name is used to declare a property of a specific type in PHP. In this case,
    // the type of the $notifier property is AdminNotifier, and the $ symbol indicates that it is a variable.
    public function __construct(string $username, LoggerInterface $logger, /*AdminNotifier $notifier*/)
    {
        $this->username = $username;
        $this->logger =$logger;//in this code snippet, it appears that a property of an object,
        // $this->logger, is being assigned a value stored in the variable $logger.
        //-> opérateur permet d accéder à la propriété d un objet
        $this->notifier = $notifier;
        $this->logger->log('Utilisateur' . $this->username . 'créé');
        /*n this code snippet, it appears that a method named log is being called on the $this->logger object,
        and a string is being passed as an argument to the method. The string appears to be constructed by
        concatenating the string 'Utilisateur' with the value of the username property of the current object,
        which is accessed using the $this->username syntax, and the string 'créé'.

        method is a function that is defined within a class. Methods are used to perform operations on the data stored
        in an object, and they can be called on an object to execute the function defined in the method.
        */
        $this->observers = new SplObjectStorage();
    }

    public function sayHello(): string
    {
        $this->logger->log($this->username . 'dit Bonjour');
        return 'Bonjour' . $this->username;
    }
    public function subscribe():void //methode qui permet d'inscrire un utilisateur
    {
        // processus d inscription
        // on remplace :
        /*$this->logger->log($this->username . 's\est inscrit');
        //The log() function is not a built-in PHP function,
        // so it is likely that it is a custom function defined elsewhere in the code. This function is probably
        // responsible for logging messages or storing them in a log file.
        // pour notifier l administrateur du site on créé une nouvelle classe AdminNotifier
        $this->notifier->notifyAdmin($this->username.'s\est inscrit');*/
        //par:
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


