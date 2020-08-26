<?php

namespace Project\Storage\Contracts;

use Project\Models\Task;

interface TaskStorageInterface
{
    public function store(Task $task);
    public function update(Task $task);
    public function get($id);
    public function all();
}
