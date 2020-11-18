<?php

namespace App\Task\Domain\Entity\Task\TaskStatus;

class StatusInProgress extends Status
{
    protected $value = 'in_progress';
    protected $next = [
        StatusDone::class,
        StatusPaused::class,
    ];
}
