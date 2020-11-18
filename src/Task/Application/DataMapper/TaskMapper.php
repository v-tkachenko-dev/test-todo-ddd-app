<?php

namespace App\Task\Application\DataMapper;

use App\Task\Domain\Entity\Task\Task;
use App\Task\Domain\Entity\Task\TaskId;
use App\Task\Domain\Entity\Task\TaskStatus;
use App\Task\Domain\Entity\Task\TaskSummary;

class TaskMapper
{
    public static function fromRaw(array $raw): Task
    {
        return new Task(
            new TaskId($raw['id']),
            new TaskSummary($raw['summary']),
            new TaskStatus($raw['status'])
        );
    }

    public static function toString(Task $task): string
    {
        return json_encode(self::toArray($task));
    }

    public static function toArray(Task $task): array
    {
        return [
            'id' => (string) $task->getId(),
            'summary' => (string) $task->getSummary(),
            'status' => (string) $task->getStatus(),
        ];
    }
}
