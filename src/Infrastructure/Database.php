<?php


namespace PlatziPHP\Infrastructure;


class Database{

    public function posts(){
        $pdo = new \PDO('mysql:host=127.0.0.1;dbname=firstSteps', 'root', 'pass');
    }
}