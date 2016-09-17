<?php

namespace PlatziPHP\Domain;


use PlatziPHP\Infrastructure\FakeDatabase;

class Imprint
{
    private $db;

    public function __construct(FakeDatabase $db){
        $this->db = $db;
    }

    public function listPublishedPosts(){
        return $this->db->posts();
    }
}