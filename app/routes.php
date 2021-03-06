<?php
declare(strict_types=1);

use App\Task\Application\Actions\{
    ListTasksAction,
    ViewTaskAction,
    CreateTaskAction,
    UpdateTaskAction,
    DeleteTaskAction
};
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world');

        return $response;
    });

    $app->group('/tasks', function (Group $group) {
        $group->get('', ListTasksAction::class);
        $group->get('/{id}', ViewTaskAction::class);
        $group->post('', CreateTaskAction::class);
        $group->put('/{id}', UpdateTaskAction::class);
        $group->delete('/{id}', DeleteTaskAction::class);
    });
};
