<?php
//Para evitar colisiones
namespace PlatziPHP;

class User {
  protected $email;
  protected $password;
  protected $firstName;
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

  public function getPassword(){
    return $this->password;
  }
}
