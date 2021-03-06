<?php


namespace PlatziPHP\Infrastructure;


use Illuminate\Support\Collection;
use PlatziPHP\Domain\Post;

class Database{

    public function posts()
    {
        $pdo = new \PDO('mysql:host=127.0.0.1;dbname=firstSteps', 'root', 'pass');

        $statement = $pdo->prepare(
            'SELECT * FROM posts'
        );
        $statement->execute();

        return $this->mapToPost(
            $statement->fetchAll()
        );
    }

    private function mapToPost(array $results){
        $posts = new Collection();

        foreach ($results as $result) {
            $post = new Post(
                $result['author_id'],
                $result['title'],
                $result['body'],
                $result['id']
            );

            $posts->push($post);
        }

        return $posts;
    }
}