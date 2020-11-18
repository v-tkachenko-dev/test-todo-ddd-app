<?php

namespace App\Task\Domain\Entity\Task;

use App\Task\Domain\Exception\TaskStatusIsNotValid;

class TaskStatus
{
    public const TYPE_PAUSED = 'paused';
    public const TYPE_TODO = 'todo';
    public const TYPE_IN_PROGRESS = 'in_progress';
    public const TYPE_DONE = 'done';

    public const TYPES = [
        self::TYPE_PAUSED,
        self::TYPE_TODO,
        self::TYPE_IN_PROGRESS,
        self::TYPE_DONE,
    ];

    protected $value = 'status';

    public function __construct(string $status)
    {
        $this->validateStatus($status);

        $this->value = $status;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    private function validateStatus(string $status): void
    {
        if (! in_array($status, self::TYPES)) {
            throw new TaskStatusIsNotValid;
        }
    }
}
