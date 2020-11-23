<?php
declare(strict_types=1);

use App\Task\Domain\Repository\TaskRepositoryInterface;
use App\Task\Infrastructure\Persistence\TaskRepository;

use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        TaskRepositoryInterface::class => \DI\autowire(TaskRepository::class),
    ]);
};
