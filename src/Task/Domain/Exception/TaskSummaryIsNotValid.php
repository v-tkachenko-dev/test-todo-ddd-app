<?php

namespace App\Task\Domain\Exception;

use App\Core\Exception\UnprocessableEntityException;

class TaskSummaryIsNotValid extends UnprocessableEntityException
{
    protected $message = 'Task summary is not valid';
}
