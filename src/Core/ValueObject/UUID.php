<?php

namespace Core\ValueObject;

use Core\Exception\EmptyIdException;

class UUID implements UUIDInterface
{
    /** @var string */
    protected $value;

    public function __construct(string $value)
    {
        $this->validateId($value);

        $this->value = $value;
    }

    public static function generate(): self
    {
        return new self(uniqid());
    }

    private function validateId(string $id): void
    {
        if (empty($id)) {
            throw new EmptyIdException;
        }
    }
}
