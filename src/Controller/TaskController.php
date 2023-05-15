<?php 

declare(strict_types=1);

namespace Teslya\Post\Controller;

use Zend\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class TaskController {
    public function __invoke(ServerRequestInterface $request, array $args = []): ResponseInterface
    {
        $response = new Response();
        $response->getBody()->write("<h1>Tasks</h1><p>Task with ID: " . $args['id'] . "</p>");
        return $response;
    }
}