<?php

namespace App\Task\Domain\Entity\Task;

use App\Core\Domain\ValueObject\UUID;

class TaskId extends UUID
{
    public function __construct(string $id)
    {
        parent::__construct($id);
    }
}
