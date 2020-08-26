<?php

$db = new PDO('mysql:host=localhost;dbname=project', 'inchoo', 'password');

$db->query("
	INSERT INTO users (username, email)
	VALUES ('ashley', 'ashley@codecourse.com')
");

echo $userId = $db->lastInsertId();

$db->query("
	UPDATE users SET active = 1
	WHERE id = $userId
");
