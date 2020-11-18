<?php

namespace Task\Domain\Exception;

use Core\Exception\DomainLayerException;

class TaskSummaryIsNotValid extends DomainLayerException
{
    protected $message = 'Task summary is not valid';
}
