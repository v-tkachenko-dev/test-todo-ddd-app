<?php

namespace App\Task\Infrastructure\Persistence;

use App\Task\Domain\Entity\Task\Task;
use App\Task\Domain\Repository\TaskRepositoryInterface;

class SQLiteTaskRepository // implements TaskRepositoryInterface
{
    public function create(Task $task): void
    {
        //
    }
}
