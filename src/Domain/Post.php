<?php
namespace PlatziPHP\Domain;

use phpDocumentor\Reflection\Types\Null_;

class Post{
  private $id;
  private $author;
  private $title;
  private $body;

  public function __construct($author_id, $title, $body, $id=null){
    $this->author = $author_id;
    $this->title = $title;
    $this->body = $body;
    $this->id = $id;
  }

  public static function create (Author $author, $title, $body) {
    $post = new Post($author, $title, $body);

    return $post;
  }

  function getTitle(){
    return $this->title;
  }

  function getBody(){
    return $this->body;
  }

  function getAuthor(){
    return 'by ' . $this->author->getFirstName();
  }
}
