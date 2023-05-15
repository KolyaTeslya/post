<?php

declare(strict_types=1);

namespace Teslya\Post\Controller;

use Zend\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class AboutController {
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write("<h1>About Us</h1><a href='/'>Home</a>");
        return $response;
    }
}