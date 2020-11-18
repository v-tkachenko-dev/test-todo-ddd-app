<?php

namespace Task\Domain\Entity\Task;

use Core\ValueObject\UUID;

class TaskId extends UUID
{
    private $id;

    public function __construct()
    {
        $this->id = parent::generate();

        parent::__construct($this->id);
    }
}
