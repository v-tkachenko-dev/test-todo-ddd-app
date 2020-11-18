<?php

namespace Task\Infrastructure\Persistence;

use Task\Domain\Entity\Task\Task;
use Task\Domain\Repository\TaskRepositoryInterface;

class SQLiteTaskRepository implements TaskRepositoryInterface
{
    public function create(Task $task): void
    {
        //
    }
}
