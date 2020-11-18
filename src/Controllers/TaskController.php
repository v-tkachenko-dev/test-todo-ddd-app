<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;

class TaskController //extends ApiController
{
    private $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function index()
    {
        $arr = json_encode([12]);

        $this->response->getBody()->write($arr);

        return $this->response;
    }
}
