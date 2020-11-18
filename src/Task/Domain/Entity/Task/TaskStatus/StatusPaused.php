<?php

namespace Task\Domain\Entity\Task\TaskStatus;

class StatusPaused extends Status
{
    protected $next = [
        StatusToDo::class
    ];
}
