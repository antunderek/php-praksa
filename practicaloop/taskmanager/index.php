<?php

use Project\Models\Task;
use Project\Storage\MySqlDatabaseTaskStorage;
use Project\TaskManager;

require 'vendor/autoload.php';

$db = new PDO('mysql:host=127.0.0.1;dbname=project', 'inchoo', 'password');

$storage = new MySqlDatabaseTaskStorage($db);
$manager = new TaskManager($storage);

//var_dump($manager);

/*$task = new Task;
$task->setDescription('A new task');
$task->setDue(new DateTime('+2 years'));
$task->setComplete();*/

$task = new Task;
$task = $manager->getTask(2);
$task->setComplete();

var_dump($task);

$manager->updateTask($task);


//$manager->addTask($task);