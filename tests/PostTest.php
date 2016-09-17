<?php
  class PostTest extends PHPUnit_Framework_TestCase{
    function testGetAuthorName(){
      $author = new \PlatziPHP\Domain\Author(
        'email@aaaa.a',
        'pass',
        'AUTOR_PLATZI'
      );

      $author->setName('Jhon', 'Beltran');

      $post = new \PlatziPHP\Domain\Post($author, 'Title', 'The Body');

      $this->assertEquals(
        'by Jhon',
        $post->getAuthor()
      );

    }
  }
