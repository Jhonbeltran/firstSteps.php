<?php
  class PostTest extends PHPUnit_Framework_TestCase{
    function testGetAuthorName(){
      $author = new \PlatziPHP\Author(
        'email@aaaa.a',
        'pass',
        'AUTOR_PLATZI'
      );

      $author->setName('Jhon', 'Beltran');

      $post = new \PlatziPHP\Post($author, 'Title', 'The Body');

      $this->assertEquals(
        'by Jhon',
        $post->getAuthor()
      );

    }
  }
?>
