<?php
namespace PlatziPHP\Infrastructure;

use Illuminate\Support\Collection;
use PlatziPHP\Domain\Author;
use PlatziPHP\Domain\Post;

class FakeDatabase{
    public function posts(){
        $author = new Author('jbeltranleon@gmail.com', 'taran', 'AUTOR_PLATZI');
        $author->setName('Jhon', 'Beltran');

        return new Collection([
            1 => new Post($author, 'First Blood', 'This is the first post'),
            2 => new Post($author, 'Post #2', 'This is the second post'),
            3 => new Post($author, 'Post #3', 'This is the third post'),
            4 => new Post($author, 'Post #4', 'This is the fourth post'),
        ]);

    }
}