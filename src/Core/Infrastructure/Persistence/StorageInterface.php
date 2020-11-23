<?php

namespace App\Core\Infrastructure\Persistence;

interface StorageInterface
{
    public function getAll(): array;
    public function getById(string $id): ?array;
    public function create(array $data): void;
    public function update(string $id, array $data): void;
    public function deleteById(string $id): void;
}
