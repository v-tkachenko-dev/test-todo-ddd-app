<?php
declare(strict_types=1);

namespace App\Task\Application\Actions;

use App\Task\Application\DataMapper\TaskMapper;
use Psr\Http\Message\ResponseInterface as Response;

class CreateTaskAction extends TaskAction
{
    protected function action(): Response
    {
        $data = json_decode($this->request->getBody()->getContents(), true);

        $task = $this->taskService->create($data);

        return $this->respondWithData(TaskMapper::toArray($task));
    }
}
