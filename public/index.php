<?php

declare(strict_types=1);

require_once __DIR__ . '/../bootstrap.php';

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$router = new League\Route\Router;

// map a route
$router->map('GET', '/', \Teslya\Post\Controller\HomeController::class);
$router->map('GET', '/about', \Teslya\Post\Controller\AboutController::class);
$router->map('GET', '/task/{id:\d+}', \Teslya\Post\Controller\TaskController::class);


$response = $router->dispatch($request);

// send the response to the browser
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);