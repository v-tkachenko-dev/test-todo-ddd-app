<?php

namespace App\Task\Domain\Entity\Task\TaskStatus;

class StatusDone extends Status
{
    protected $value = 'done';
    protected $next = [];
}
