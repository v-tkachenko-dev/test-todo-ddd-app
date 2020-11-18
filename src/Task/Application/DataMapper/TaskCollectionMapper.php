<?php

namespace App\Task\Application\DataMapper;

use App\Task\Domain\Entity\Task\Task;

class TaskCollectionMapper
{
    /**
     * @param array $collection
     * @return Task[]|array
     */
    public static function fromRaw(array $collection): array
    {
        $tasks = [];

        foreach ($collection as $raw) {
            $tasks[] = TaskMapper::fromRaw($raw);
        }

        return $tasks;
    }

    /**
     * @param Task[]|array $collection
     * @return string
     */
    public static function toString(array $collection): string
    {
        $tasks = [];

        foreach ($collection as $raw) {
            $tasks[] = TaskMapper::toArray($raw);
        }

        return json_encode($tasks);
    }
}
