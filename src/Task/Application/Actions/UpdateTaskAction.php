<?php
declare(strict_types=1);

namespace App\Task\Application\Actions;

use App\Core\Domain\ValueObject\UUID;
use App\Task\Application\DataMapper\TaskMapper;
use Psr\Http\Message\ResponseInterface as Response;

class UpdateTaskAction extends TaskAction
{
    protected function action(): Response
    {
        $id = new UUID((string) $this->resolveArg('id'));
        $data = json_decode($this->request->getBody()->getContents(), true);

        $task = $this->taskService->update($id, $data);

        return $this->respondWithData(TaskMapper::toArray($task));
    }
}
