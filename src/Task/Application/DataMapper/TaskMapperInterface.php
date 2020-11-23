<?php

namespace App\Task\Application\DataMapper;

use App\Core\Domain\ValueObject\UUID;
use App\Task\Domain\Entity\Task\Task;

interface TaskMapperInterface
{
    /** @return Task[]|array */
    public function getAll(): array;

    public function getById(UUID $id): ?Task;
    public function create(Task $task): void;
    public function update(Task $task): void;
    public function delete(Task $task): void;
}
