<?php

namespace Core\ValueObject;

class Uuid implements UuidInterface
{
    /** @var string */
    protected $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function generate(): self
    {
        return new self(uniqid());
    }
}
