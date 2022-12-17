<?php

require_once 'User.php';

//echo User::$count.'<br>';
$john = new User ('john');
//echo User::$count.'<br>';
$laure = new User('laure');
//echo User::$count.'<br>';

echo $john->sayHello();
echo '<br>';
echo $laure->sayHello();
$samantha = new User ('samantha');