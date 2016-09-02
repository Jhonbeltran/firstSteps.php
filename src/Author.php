<?php
namespace PlatziPHP;

class Author extends User {

  public function __construct($emal, $password, $key){
    parent::__construct($emal, $password);

    if ($key != 'AUTOR_PLATZI') {
      throw new \InvalidArgumentException("Invalid key given.");
    }
  }

  public function getLastName(){
    //si lastName es privado no va a poder usarse
    return $this->lastName;
  }
}
