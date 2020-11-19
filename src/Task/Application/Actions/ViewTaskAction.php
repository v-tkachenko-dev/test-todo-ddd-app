<?php
declare(strict_types=1);

namespace App\Task\Application\Actions;

use App\Core\Domain\ValueObject\UUID;
use App\Task\Application\DataMapper\TaskMapper;
use Psr\Http\Message\ResponseInterface as Response;

class ViewTaskAction extends TaskAction
{
    protected function action(): Response
    {
        $id = new UUID((string) $this->resolveArg('id'));

        $task = $this->taskService->getById($id);

        return $this->respondWithData(TaskMapper::toArray($task));
    }
}
