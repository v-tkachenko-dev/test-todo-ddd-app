<?php

namespace App\Task\Application\DataMapper;

use App\Core\Domain\ValueObject\UUID;
use App\Task\Domain\Entity\Task\Task;
use App\Task\Domain\Entity\Task\TaskId;
use App\Task\Domain\Entity\Task\TaskStatus;
use App\Task\Domain\Entity\Task\TaskSummary;
use App\Task\Infrastructure\Persistence\TaskInMemoryStorage;

class TaskMapper implements TaskMapperInterface
{
    private $storage;

    public function __construct(
        TaskInMemoryStorage $storage
    ) {
        $this->storage = $storage;
    }

    public function getAll(): array
    {
        $tasks = $this->storage->getAll();

        return $this->fromRawCollection($tasks);
    }

    public function getById(UUID $id): ?Task
    {
        $task = $this->storage->getById($id);
        if (! $task) {
            return null;
        }

        return $this->fromRaw($task);
    }

    public function create(Task $task): void
    {
        $this->storage->create(
            $this->toRaw($task)
        );
    }

    public function update(Task $task): void
    {
        $this->storage->update(
            (string) $task->getId(), $this->toRaw($task)
        );
    }

    public function delete(Task $task): void
    {
        $this->storage->deleteById((string) $task->getId());
    }

    private function fromRawCollection(array $collection): array
    {
        $tasks = [];

        foreach ($collection as $raw) {
            $tasks[] = $this->fromRaw($raw);
        }

        return $tasks;
    }

    private function fromRaw(array $raw): Task
    {
        return new Task(
            new TaskId($raw['id']),
            new TaskSummary($raw['summary']),
            new TaskStatus($raw['status'])
        );
    }

    public static function toRawCollection(array $tasks): array
    {
        $collection = [];

        foreach ($tasks as $task) {
            $collection[] = self::toRaw($task);
        }

        return $collection;
    }

    public static function toRaw(Task $task): array
    {
        return [
            'id' => (string) $task->getId(),
            'summary' => (string) $task->getSummary(),
            'status' => (string) $task->getStatus(),
        ];
    }
}
