<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=project;port=3306', 'inchoo', 'password');

$users = $db->query("
	SELECT * FROM users;
");

$users = $users->fetchAll(PDO::FETCH_OBJ);

foreach ($users as $user) {
	echo $user->username, '<br>';
}

var_dump($users);
