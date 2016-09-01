<?php
  class UserTest extends PHPUnit_Framework_TestCase{
      //recordemos que para que tome una funcion como test debe llamarse testNombreFuncion
      //O poner un comentario de tipo /** @test */
      function testConstructor(){
        $user = new \PlatziPHP\User('card@taran.tan', '1234');
        $this->assertInstanceOf(\PlatziPHP\User::class, $user);
      }

      function testGetFirstName(){
        $user = new \PlatziPHP\User('card@fu.la', '12f34');
        $user->setName('Fredy', 'León');

        $name = $user->getFirstName();

        $this->assertEquals('Fredy', $name);
      }

      //Test driven development
  }
?>
