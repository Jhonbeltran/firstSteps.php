<?php
  class UserTest extends PHPUnit_Framework_TestCase{
    
      function testConstructor(){
        $user = new \PlatziPHP\User('card@taran.tan', '1234');

        $this->assertInstanceOf(\PlatziPHP\User::class, $user);
      }
  }
?>
