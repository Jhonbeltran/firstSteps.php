<?php
namespace PlatziPHP\Http\Controllers;
use Illuminate\Http\Request;
use PlatziPHP\Author;
use PlatziPHP\Http\Views\View;
use PlatziPHP\Post;


class HomeController{
	public function index(Request $request){

		$author = new Author('jbeltranleon@gmail.com', 'taran', 'AUTOR_PLATZI');

		$post = [
			new Post($author, 'First Blood', 'This is the first post'),
			new Post($author, 'Post #2', 'This is the second post'),
			new Post($author, 'Post #3', 'This is the third post'),
			new Post($author, 'Post #4', 'This is the fourth post'),
		];

		$view = new View('home', [
			'post' => $post
		]);

		$response = $view->render();

		$response->send();
	}
}
