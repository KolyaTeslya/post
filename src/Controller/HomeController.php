<?php

declare(strict_types=1);

namespace Teslya\Post\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;


class HomeController {
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write('<h1>Hello world!</h1><a href="/about">About Us</a>');
        return $response;
    }
}