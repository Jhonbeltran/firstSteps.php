<?php
//Para evitar colisiones
namespace PlatziPHP;

class User {
  private $email;
  private $password;
  private $firstName;
  protected $lastName;

  //constructor
  public function __construct($email, $password){
    $this->email = $email;
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }

  public function setName($firstName, $lastName){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function getFirstName(){
    return $this->firstName;
  }
}

?>
