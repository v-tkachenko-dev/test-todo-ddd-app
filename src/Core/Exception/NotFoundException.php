<?php

namespace App\Core\Exception;

class NotFoundException extends ApplicationLayerException
{
    protected $code = 400;
    protected $message = 'Not found';
}
