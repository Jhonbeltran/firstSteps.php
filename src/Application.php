<?php
namespace PlatziPHP;

use Illuminate\Contracts\Container\Container;
use PlatziPHP\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Events\Dispatcher;

class Application{

    private $container;

    public function __construct(Container $container){
        $this->container = $container;
    }

    public function run(){
        $router = new Router(
            new Dispatcher($this->container),
            $this->container
        );

        $router->get('/', HomeController::class . '@index');
        $router->get('/post/{id}', HomeController::class . '@show');

        $response = $router->dispatch(Request::capture());

        $response->send();
    }

}