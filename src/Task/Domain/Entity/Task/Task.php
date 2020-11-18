<?php

namespace App\Task\Domain\Entity\Task;

use Core\ValueObject\DateTime;

class Task
{
    /** @var TaskId */
    private $id;

    /** @var TaskSummary */
    private $summary;

    /** @var TaskStatus */
    private $status;

    /** @var DateTime */
    private $createdAt;

    /** @var DateTime */
    private $updatedAt;

    public function __construct(
        TaskId $id,
        TaskSummary $summary,
        TaskStatus $status
    ) {
        $this->id = $id;
        $this->summary = $summary;
        $this->status = $status;
    }

    public function getId(): TaskId
    {
        return $this->id;
    }

    public function getSummary(): TaskSummary
    {
        return $this->summary;
    }

    public function setSummary(TaskSummary $summary): void
    {
        $this->summary = $summary;
    }

    public function getStatus(): TaskStatus
    {
        return $this->status;
    }

    public function setStatus(TaskStatus $status): void
    {
        $this->status = $status;
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
