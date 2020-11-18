<?php
declare(strict_types=1);

namespace App\Task\Application\Actions;

use App\Core\Application\Actions\Action;
use App\Task\Application\Service\TaskServiceInterface;

abstract class TaskAction extends Action
{
    protected $taskService;

    public function __construct(TaskServiceInterface $taskService)
    {
        $this->taskService = $taskService;
    }
}
