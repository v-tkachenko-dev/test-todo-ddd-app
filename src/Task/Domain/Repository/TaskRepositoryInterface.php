<?php

namespace Task\Domain\Repository;

use Task\Domain\Entity\Task;
use Core\ValueObject\UuidInterface;

interface TaskRepositoryInterface
{
    public function getAll(): array;
    public function getById(UuidInterface $id): Task;
    public function create(Task $task): void;
    public function delete(Task $task): void;
}
