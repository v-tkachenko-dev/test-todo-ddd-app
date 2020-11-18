<?php

namespace App\Task\Domain\Entity\Task\TaskStatus;

class StatusPaused extends Status
{
    protected $value = 'paused';
    protected $next = [
        StatusToDo::class
    ];
}
