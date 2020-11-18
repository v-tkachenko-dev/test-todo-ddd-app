<?php

namespace App\Task\Infrastructure\Service;

use App\Task\Domain\Entity\Task\Task;

interface TaskServiceInterface
{
    public function create(): Task;
//    public function updateStatus(): void;
//    public function delete(): void;
}
