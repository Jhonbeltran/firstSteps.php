<?php
require_once 'vendor/autoload.php';

$user = new \PlatziPHP\User('card@taran.tan', '1234');

$user->setName('Jhon', 'Beltran');

echo $user->getFirstName();
//para un salto de linea
echo PHP_EOL;
//var_dump($user)

$author = new \PlatziPHP\Author('card@taran.tan', '1234');

$author->setName('Jhon', 'Beltran');

echo $author->getFirstName();
echo PHP_EOL;
echo $author->getPassword();
echo PHP_EOL;
