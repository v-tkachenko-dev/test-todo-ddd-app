<?php

namespace App\Task\Domain\Exception;

use App\Core\Exception\DomainLayerException;

class TaskStatusIsNotValid extends DomainLayerException
{
    protected $message = 'Task status is not valid';
}
