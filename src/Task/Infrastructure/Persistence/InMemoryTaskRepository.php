<?php

namespace App\Task\Infrastructure\Persistence;

use App\Core\Exception\NotFoundException;
use App\Task\Application\DataMapper\TaskCollectionMapper;
use App\Task\Application\DataMapper\TaskMapper;
use App\Task\Domain\Entity\Task\Task;
use App\Task\Domain\Repository\TaskRepositoryInterface;
use App\Core\Domain\ValueObject\UUID;

class InMemoryTaskRepository implements TaskRepositoryInterface
{
    private $tasks = [];

    public function __construct()
    {
        $this->tasks = [
            [
                'id' => '6afa6898-f0ed-4c92-9667-14a72b4b7ac4',
                'summary' => 'Task I',
                'status' => 'todo',
//                'created_at' => '',
//                'updated_at' => '',
            ],
            [
                'id' => '8d890eb4-36fa-4ef9-b07e-728df4b165d9',
                'summary' => 'Task II',
                'status' => 'todo',
            ],
            [
                'id' => '473a07a5-f235-435b-b5f4-be185652e43b',
                'summary' => 'Task III',
                'status' => 'todo',
            ],
            [
                'id' => 'b755ec21-240b-44d0-a6f9-a11f360b4e8e',
                'summary' => 'Task IV',
                'status' => 'todo',
            ],
            [
                'id' => '9fd8e7d9-8143-489c-a0ac-0a2a98e73e19',
                'summary' => 'Task V',
                'status' => 'todo',
            ],
        ];
    }

    public function getAll(): array
    {
        return TaskCollectionMapper::fromRaw($this->tasks);
    }

    public function getById(UUID $id): Task
    {
        $index = array_search((string) $id, array_column($this->tasks, 'id'));
        if (! $index) {
            throw new NotFoundException();
        }

        return TaskMapper::fromRaw($this->tasks[$index]);
    }

    public function create(Task $task): void
    {
        $this->tasks[] = $task;
    }
}
