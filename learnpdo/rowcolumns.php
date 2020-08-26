<?php

$db = new PDO('mysql:host=localhost;dbname=project', 'inchoo', 'password');

$users = $db->query("
	SELECT * FROM users
");

echo $users->rowCount();

