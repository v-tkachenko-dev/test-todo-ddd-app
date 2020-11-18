<?php

namespace App\Task\Domain\Entity\Task;

use App\Core\Domain\ValueObject\UUID;

class TaskId extends UUID
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;

        parent::__construct($this->id);
    }
}
