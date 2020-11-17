<?php

namespace Task\Domain\Exception;

use Core\Exception\DomainLayerException;

class TaskNotFoundException extends DomainLayerException
{
    protected $message = 'Task not found';
}
