<?php
declare(strict_types=1);

use App\Task\Domain\Repository\TaskRepositoryInterface;
use App\Task\Infrastructure\Persistence\InMemoryTaskRepository;
//use App\Task\Infrastructure\Persistence\SQLiteTaskRepository;

use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        TaskRepositoryInterface::class => \DI\autowire(InMemoryTaskRepository::class),
//        TaskRepositoryInterface::class => \DI\autowire(SQLiteTaskRepository::class),
    ]);
};