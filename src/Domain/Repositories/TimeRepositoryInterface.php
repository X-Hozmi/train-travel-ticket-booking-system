<?php

namespace Src\Domain\Repositories;

use Src\Domain\Entities\Time;

interface TimeRepositoryInterface
{
    public function show(): array;
    public function findById(int $id): ?Time;
    public function save(Time $time): bool;
    public function update(Time $time): bool;
    public function delete(int $id): bool;
}
