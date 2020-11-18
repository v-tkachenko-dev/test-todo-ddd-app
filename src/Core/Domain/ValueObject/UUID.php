<?php

namespace App\Core\Domain\ValueObject;

use App\Core\Exception\EmptyIdException;

class UUID
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

    public function __toString(): string
    {
        return $this->value;
    }

    private function validateId(string $id): void
    {
        if (empty($id)) {
            throw new EmptyIdException;
        }
    }
}
