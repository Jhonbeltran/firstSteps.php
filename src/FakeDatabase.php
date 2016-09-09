<?php
namespace PlatziPHP;

use Illuminate\Support\Collection;

class FakeDatabase{
    public function posts(){
        $author = new Author('jbeltranleon@gmail.com', 'taran', 'AUTOR_PLATZI');
        $author->setName('Jhon', 'Beltran');

        return new Collection([
            new Post($author, 'First Blood', 'This is the first post'),
            new Post($author, 'Post #2', 'This is the second post'),
            new Post($author, 'Post #3', 'This is the third post'),
            new Post($author, 'Post #4', 'This is the fourth post'),
        ]);

    }
}