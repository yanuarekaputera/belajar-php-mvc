<?php

require_once __DIR__ . '/../vendor/autoload.php';

use YanuarEkaPutera\Belajar\PHP\MVC\App\Router;
use YanuarEkaPutera\Belajar\PHP\MVC\Controller\HomeController;
use YanuarEkaPutera\Belajar\PHP\MVC\Controller\ProductController;
use YanuarEkaPutera\Belajar\PHP\MVC\Middleware\AuthMiddleware;

//add('method', 'path', 'controller', 'function')
//Agar dapat menampung path-variables maka menggunakan regex
//Dengan pattern 
Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);
Router::add('GET', '/about', HomeController::class, 'about');


Router::run();