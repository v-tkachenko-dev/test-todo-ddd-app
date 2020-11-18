<?php

namespace App\Core\Exception;

class EmptyIdException extends ApplicationLayerException
{
    protected $message = 'ID cannot be empty';
}
