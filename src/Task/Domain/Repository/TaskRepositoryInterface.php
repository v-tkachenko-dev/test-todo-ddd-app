<?php

namespace App\Task\Domain\Repository;

use App\Task\Domain\Entity\Task\Task;
use App\Core\Domain\ValueObject\UUID;

interface TaskRepositoryInterface
{
    /** @return Task[]|array */
    public function getAll(): array;
    public function getById(UUID $id): Task;
    public function create(Task $task): void;
//    public function delete(Task $task): void;
}
