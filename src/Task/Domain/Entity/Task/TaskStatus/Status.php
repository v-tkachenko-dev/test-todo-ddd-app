<?php

namespace Task\Domain\Entity\Task\TaskStatus;

abstract class Status
{
//    private const TYPES = [
//        StatusToDo::class,
//        StatusInProgress::class,
//        StatusDone::class,
//    ];

    protected $next = [];

//    public function __construct(self $status)
//    {
//        $this->validateStatus($status);
//
//        $this->status = $status;
//    }
//
//    private function validateStatus(string $status): void
//    {
//        if (! in_array($status, self::TYPES)) {
//            throw new TaskStatusIsNotValid;
//        }
//    }

    public function canBeChangedTo(self $status): bool
    {
        return in_array(get_class($status), $this->next, true);
    }
}
