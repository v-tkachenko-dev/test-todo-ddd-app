<?php
declare(strict_types=1);

namespace App\Task\Application\Actions;

use App\Core\Domain\ValueObject\UUID;
use Psr\Http\Message\ResponseInterface as Response;

class DeleteTaskAction extends TaskAction
{
    protected function action(): Response
    {
        $id = new UUID((string) $this->resolveArg('id'));

        $this->taskService->delete($id);

        return $this->response;
    }
}
