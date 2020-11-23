<?php

namespace App\Task\Infrastructure\Persistence;

use App\Core\Infrastructure\Persistence\StorageInterface;

class TaskInMemoryStorage implements StorageInterface
{
    private $tasks = [];

    public function __construct()
    {
        $this->tasks = [
            [
                'id' => '6afa6898-f0ed-4c92-9667-14a72b4b7ac4',
                'summary' => 'Task I',
                'status' => 'todo',
            ],
            [
                'id' => '8d890eb4-36fa-4ef9-b07e-728df4b165d9',
                'summary' => 'Task II',
                'status' => 'in_progress',
            ],
            [
                'id' => '473a07a5-f235-435b-b5f4-be185652e43b',
                'summary' => 'Task III',
                'status' => 'todo',
            ],
            [
                'id' => 'b755ec21-240b-44d0-a6f9-a11f360b4e8e',
                'summary' => 'Task IV',
                'status' => 'paused',
            ],
            [
                'id' => '9fd8e7d9-8143-489c-a0ac-0a2a98e73e19',
                'summary' => 'Task V',
                'status' => 'done',
            ],
        ];
    }

    public function getAll(): array
    {
        return $this->tasks;
    }

    public function getById(string $id): ?array
    {
        $index = $this->getIndex($id);
        if (! $index) {
            return null;
        }

        return $this->tasks[$index];
    }

    public function create(array $task): void
    {
        $this->tasks[] = $task;
    }

    public function update(string $id, array $data): void
    {
        $index = $this->getIndex($id);
        if (! $index) {
            return;
        }

        $this->tasks[$index]['summary'] = $data['summary'];
        $this->tasks[$index]['status'] = $data['status'];
    }

    public function deleteById(string $id): void
    {
        $index = $this->getIndex($id);
        if (! $index) {
            return;
        }

        unset($this->tasks[$index]);
    }

    /**
     * @param $id
     * @return false|int|string
     */
    private function getIndex(string $id)
    {
        return array_search($id, array_column($this->tasks, 'id'));
    }
}
