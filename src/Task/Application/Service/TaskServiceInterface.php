<?php

namespace App\Task\Application\Service;

use App\Core\Domain\ValueObject\UUID;
use App\Core\Exception\NotFoundException;
use App\Task\Domain\Entity\Task\Task;

interface TaskServiceInterface
{
    /** @return Task[]|array */
    public function getAll(): array;

    /**
     * @param UUID $id
     * @return Task
     * @throws NotFoundException
     */
    public function getById(UUID $id): Task;

    public function create(array $data): Task;
    public function update(UUID $id, $data): Task;
    public function delete(UUID $id): void;
}
