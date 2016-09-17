<?php
namespace PlatziPHP\Domain;

class Post{
  private $author;
  private $title;
  private $body;

  public function __construct(Author $author, $title, $body) {
    $this->author = $author;
    $this->title = $title;
    $this->body = $body;
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
