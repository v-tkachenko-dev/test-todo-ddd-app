<?php

namespace App\Task\Domain\Exception;

use App\Core\Exception\DomainLayerException;

class TaskSummaryIsNotValid extends DomainLayerException
{
    protected $message = 'Task summary is not valid';
}
