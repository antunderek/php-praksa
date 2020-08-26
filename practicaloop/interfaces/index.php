<?php

interface TaskStorageInterface
{
    public function get($id);
    public function store(Task $task);
}

class DatabaseTaskStorage implements TaskStorageInterface

{
    public function get($id)
    {
    }

    public function store(Task $task)
    {
    }
}

$storage = new DatabaseTaskStorage;
var_dump($storage);
