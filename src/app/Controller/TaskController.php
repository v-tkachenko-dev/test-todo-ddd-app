<?php

namespace App\Controller;

use Task\Infrastructure\Service\TaskServiceInterface;

class TaskController
{
    private $taskService;

    public function __construct(
        TaskServiceInterface $taskService
    ) {
        $this->taskService = $taskService;
    }

    public function create()
    {
        $task = $this->taskService->create();

        return $task;
    }
}
