<?php

namespace App\Core\Exception;

class UnprocessableEntityException extends DomainLayerException
{
    protected $message = 'Action is not valid';
}
