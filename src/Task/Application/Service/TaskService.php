<?php

namespace App\Task\Infrastructure\Service;

use App\Task\Domain\Entity\Task\Task;
use App\Task\Domain\Entity\Task\TaskId;
use App\Task\Domain\Entity\Task\TaskStatus;
use App\Task\Domain\Entity\Task\TaskSummary;
use App\Task\Domain\Repository\TaskRepositoryInterface;

class TaskService implements TaskServiceInterface
{
    private $taskRepository;

    public function __construct(
        TaskRepositoryInterface $taskRepository
    ) {
        $this->taskRepository = $taskRepository;
    }

    public function create(): Task
    {
        $task = new Task(
            new TaskId,
            new TaskSummary('new task'),
            new TaskStatus(TaskStatus::TYPE_TODO)
        );

        $this->taskRepository->create($task);

        return $task;
    }
}
