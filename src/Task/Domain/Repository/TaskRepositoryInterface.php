<?php

namespace Task\Domain\Repository;

use Task\Domain\Entity\Task\Task;

interface TaskRepositoryInterface
{
//    public function getAll(): array;
//    public function getById(UUIDInterface $id): Task;
    public function create(Task $task): void;
//    public function delete(Task $task): void;
}
