<?php

namespace Task\Domain\Exception;

use Core\Exception\DomainLayerException;

class TaskStatusIsNotValid extends DomainLayerException
{
    protected $message = 'Task status is not valid';
}
