<?php

use Project\Models\Task;
use Project\Storage\MySqlDatabaseTaskStorage;

require 'vendor/autoload.php';

//use Models\Task;

//var_dump(Task::class);

$db = new PDO('mysql:host=localhost;dbname=project', 'inchoo', 'password');

$storage = new MySqlDatabaseTaskStorage($db);

$task = new Task;
$task->setDescription('Drink coffee');
$task->setDue(new DateTime('+ 10 minutes'));

//$storage->store($task);

//$taskId = $storage->store($task);
//var_dump($storage->get($taskId));

$task = $storage->get(2);
$task->setDescription('Drink more coffee');
$task->setDue(new DateTime('+1 year'));
$task->setComplete(false);

var_dump($storage->update($task));