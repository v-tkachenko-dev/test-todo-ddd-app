<?php

namespace Task\Domain;

class TaskStatus
{
    public const TYPE_IN_PROGRESS = 'in_progress';
    public const TYPE_DONE = 'done';
    public const TYPE_TODO = 'todo';

    public function __construct()
    {
        //
    }
}
