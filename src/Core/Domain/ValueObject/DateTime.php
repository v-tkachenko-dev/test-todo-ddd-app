<?php

namespace Core\ValueObject;

use \DateTimeInterface;

class DateTime
{
    /** @var string */
    protected $value;

    public function __construct(DateTimeInterface $value)
    {
        $this->value = $value;
    }
}
