<?php

namespace Task\Infrastructure\Service;

use Task\Domain\Entity\Task\Task;

interface TaskServiceInterface
{
    public function create(): Task;
//    public function updateStatus(): void;
//    public function delete(): void;
}
