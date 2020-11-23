<?php

namespace App\Task\Infrastructure\Persistence;

use App\Task\Domain\Entity\Task\Task;
use App\Core\Domain\ValueObject\UUID;
use App\Task\Application\DataMapper\TaskMapperInterface;
use App\Task\Domain\Repository\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{
    private $taskMapper;

    public function __construct(
        TaskMapperInterface $taskMapper
    ) {
        $this->taskMapper = $taskMapper;
    }

    public function getAll(): array
    {
        return $this->taskMapper->getAll();
    }

    public function getById(UUID $id): ?Task
    {
        return $this->taskMapper->getById($id);
    }

    public function create(Task $task): void
    {
        $this->taskMapper->create($task);
    }

    public function update(Task $task): void
    {
        $this->taskMapper->update($task);
    }

    public function delete(Task $task): void
    {
        $this->taskMapper->delete($task);
    }
}
