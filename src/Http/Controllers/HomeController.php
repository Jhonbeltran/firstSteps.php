<?php
namespace PlatziPHP\Http\Controllers;
use Illuminate\Http\Request;
use PlatziPHP\FakeDatabase;
use PlatziPHP\Http\Views\View;



class HomeController{
    private  $db;

    public function __construct(FakeDatabase $db){
        $this->db = $db;
    }

    public function index(Request $request){

		$view = new View('home', [
			'post' => $post
		]);

		$response = $view->render();

		$response->send();
	}
}
