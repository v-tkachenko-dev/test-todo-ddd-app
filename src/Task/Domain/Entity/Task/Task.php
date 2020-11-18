<?php

namespace App\Task\Domain\Entity\Task;

class Task
{
    /** @var TaskId */
    private $id;

    /** @var TaskSummary */
    private $summary;

    /** @var TaskStatus */
    private $status;

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

    public function setSummary(TaskSummary $summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    public function getStatus(): TaskStatus
    {
        return $this->status;
    }

    public function setStatus(TaskStatus $status): self
    {
        $this->status = $status;

        return $this;
    }
}
