<?php
declare(strict_types=1);

namespace App\Task\Application\Actions;

use App\Core\Application\Actions\Action;
use App\Task\Domain\Repository\TaskRepositoryInterface;

abstract class TaskAction extends Action
{
    protected $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }
}
