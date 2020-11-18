<?php

namespace App\Task\Domain\Entity\Task\TaskStatus;

class StatusToDo extends Status
{
    protected $value = 'todo';
    protected $next = [
        StatusInProgress::class,
        StatusPaused::class,
    ];
}
