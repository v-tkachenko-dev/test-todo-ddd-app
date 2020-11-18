<?php
declare(strict_types=1);

namespace App\Task\Application\Actions;

use App\Task\Application\DataMapper\TaskCollectionMapper;
use Psr\Http\Message\ResponseInterface as Response;

class ListTasksAction extends TaskAction
{
    protected function action(): Response
    {
        $tasks = $this->taskRepository->getAll();

        return $this->respondWithData(
            TaskCollectionMapper::toString($tasks)
        );
    }
}
