<?php
use PlatziPHP\Email;

class EmailTest extends PHPUnit_Framework_TestCase{
  function testEmailValid(){
    $email = new Email('jbeltranleon@gmail.com');

    $this->assertInstanceOf(
      Email::class,
      $email
    );
  }

  function testEmailInvalid(){
    $this->setExpectedException(
      \InvalidArgumentException::class
    );
    $email = new Email('jbeltranleon');
  }
}
