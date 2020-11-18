<?php

namespace App\Task\Domain\Entity\Task;

use App\Task\Domain\Exception\TaskSummaryIsNotValid;

class TaskSummary
{
    public const MIN_LENGTH = 4;

    private $summary;

    public function __construct(string $summary)
    {
        $this->validateSummary($summary);

        $this->summary = $summary;
    }

    private function validateSummary(string $summary): void
    {
        if (strlen($summary) < self::MIN_LENGTH) {
            throw new TaskSummaryIsNotValid;
        }
    }

    public function __toString(): string
    {
        return $this->summary;
    }
}
