<?php
namespace PlatziPHP;

class Author extends User {
  public function getLastName(){
    //si lastName es privado no va a poder usarse
    return $this->lastName;
  }
}

?>
