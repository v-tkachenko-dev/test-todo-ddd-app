<?php

namespace App\Task\Domain\Exception;

use App\Core\Exception\UnprocessableEntityException;

class TaskStatusIsNotValid extends UnprocessableEntityException
{
    protected $message = 'Task status is not valid';
}
