<?php

namespace Task\Domain\Entity\Task;

use Core\ValueObject\DateTime;
use Task\Domain\Entity\Task\TaskStatus\Status;

class Task
{
    /** @var TaskId */
    private $id;

    /** @var TaskSummary */
    private $summary;

    /** @var Status */
    private $status;

    /** @var DateTime */
    private $createdAt;

    /** @var DateTime */
    private $updatedAt;

    public function __construct(
        TaskId $id,
        TaskSummary $summary,
        Status $status
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

    public function getStatus(): Status
    {
        return $this->status;
    }

    public function setStatus(Status $status): void
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
