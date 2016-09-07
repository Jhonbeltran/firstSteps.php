<?php
use PlatziPHP\Http\Controllers\HomeController;
use Illuminate\Http\Request;
require_once __DIR__ . '/../vendor/autoload.php';

$controller = new HomeController();
$request = Request::capture();

echo $controller->index($request);
