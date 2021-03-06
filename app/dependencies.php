<?php
declare(strict_types=1);

use App\Task\Application\Service\{
    TaskServiceInterface,
    TaskService
};
use App\Task\Application\DataMapper\{
    TaskMapperInterface,
    TaskMapper
};

use App\Core\Infrastructure\Persistence\StorageInterface;
use App\Task\Infrastructure\Persistence\TaskInMemoryStorage;

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        LoggerInterface::class => function (ContainerInterface $c) {
            $settings = $c->get('settings');

            $loggerSettings = $settings['logger'];
            $logger = new Logger($loggerSettings['name']);

            $processor = new UidProcessor();
            $logger->pushProcessor($processor);

            $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
            $logger->pushHandler($handler);

            return $logger;
        },

        TaskServiceInterface::class => function(ContainerInterface $c) {
            return $c->get(TaskService::class);
        },

        TaskMapperInterface::class => function(ContainerInterface $c) {
            return $c->get(TaskMapper::class);
        },

        StorageInterface::class => function(ContainerInterface $c) {
            return $c->get(TaskInMemoryStorage::class);
        },
    ]);
};
