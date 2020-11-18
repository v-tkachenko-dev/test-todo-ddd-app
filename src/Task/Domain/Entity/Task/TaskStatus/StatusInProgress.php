<?php

namespace Task\Domain\Entity\Task\TaskStatus;

class StatusInProgress extends Status
{
    protected $next = [
        StatusDone::class,
        StatusPaused::class,
    ];
}
