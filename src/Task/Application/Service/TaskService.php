<?php

namespace Task\Infrastructure\Service;

use Task\Domain\Entity\Task\Task;
use Task\Domain\Entity\Task\TaskId;
use Task\Domain\Entity\Task\TaskStatus\StatusToDo;
use Task\Domain\Entity\Task\TaskSummary;
use Task\Domain\Repository\TaskRepositoryInterface;

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
            new StatusToDo()
        );

        $this->taskRepository->create($task);

        return $task;
    }
}
