<?php

namespace Task\Domain\Entity\Task\TaskStatus;

class StatusToDo extends Status
{
    protected $next = [
        StatusInProgress::class,
        StatusPaused::class,
    ];
}
