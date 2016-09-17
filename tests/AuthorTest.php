<?php
class AuthorTest extends PHPUnit_Framework_TestCase{
    function testConstructor(){
      $author = new \PlatziPHP\Domain\Author(
        'genius@dat.com',
        'plazo',
        'AUTOR_PLATZI'
      );

      $this->assertInstanceOf(\PlatziPHP\Domain\Author::class, $author);
    }

    function testFailWithoutKey(){

      $this->setExpectedException(\InvalidArgumentException::class);
      $author = new \PlatziPHP\Domain\Author(
        'dafac@dat.com',
        'ñaña',
        'wrongkey'
      );

      $this->assertInstanceOf(\PlatziPHP\Author::class, $author);
    }
}
