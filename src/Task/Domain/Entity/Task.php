<?php

namespace Task\Domain\Entity;

use Task\Domain\TaskStatus;
use Task\Domain\TaskSummary;
use Core\ValueObject\DateTime;
use Core\ValueObject\UuidInterface;

class Task
{
    /** @var UuidInterface */
    protected $id;

    /** @var TaskSummary */
    protected $summary;

    /** @var TaskStatus */
    protected $status;

    /** @var DateTime */
    protected $createdAt;

    /** @var DateTime */
    protected $updatedAt;

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getSummary(): TaskSummary
    {
        return $this->summary;
    }

    public function getStatus(): TaskStatus
    {
        return $this->status;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }
}
