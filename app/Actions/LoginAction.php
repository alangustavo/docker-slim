<?php

namespace App\Actions;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\DAOs\UsersDAO;

final class LoginAction
{
    public function __invoke(Request $request, Response $response): Response
    {
        $data = $request->getParsedBody();
        $userDAO = new UsersDAO;
        $user = $userDAO->getUserByEmail("alan.gustavo@gmail.com");
        $response->getBody()->write(json_encode($user));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
