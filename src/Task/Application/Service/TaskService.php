<?php

namespace App\Task\Application\Service;

use App\Core\Domain\ValueObject\UUID;
use App\Core\Exception\NotFoundException;
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

    public function getAll(): array
    {
        return $this->taskRepository->getAll();
    }

    public function getById(UUID $id): Task
    {
        $task = $this->taskRepository->getById($id);
        if (! $task) {
            throw new NotFoundException;
        }

        return $task;
    }

    public function create(array $data): Task
    {
        $summary = $data['summary'] ?? '';

        $task = new Task(
            new TaskId((string) UUID::generate()),
            new TaskSummary($summary),
            new TaskStatus(TaskStatus::TYPE_TODO)
        );

        $this->taskRepository->create($task);

        $task = $this->getById($task->getId());

        return $task;
    }

    public function update(UUID $id, $data): Task
    {
        $summary = new TaskSummary($data['summary'] ?? '');
        $status = new TaskStatus($data['status'] ?? '');

        $task = $this->getById($id);
        $task
            ->setSummary($summary)
            ->setStatus($status)
        ;

        $this->taskRepository->update($task);

        return $this->getById($task->getId());
    }

    public function delete(UUID $id): void
    {
        $task = $this->getById($id);

        $this->taskRepository->delete($task);
    }
}
