<?php

require_once __DIR__ . '/../vendor/autoload.php';

use programmer\belajar\php\MVC\App\Router;
use programmer\belajar\php\MVC\Controller\HomeController;
use programmer\belajar\php\MVC\Controller\ProductController;
use programmer\belajar\php\MVC\Middleware\AuthMiddleware;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);

Router::run();