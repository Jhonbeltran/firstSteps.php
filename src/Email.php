<?php
namespace PlatziPHP;

class Email{
  private $address;

  public function __construct($address){
    if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
      //template string in php
      throw new \InvalidArgumentException("Invalid emal adress: [$address]");
    }

    $this->address = $address;
  }

  public function getAddress(){
    return $this->adress;
  }
}
?>
