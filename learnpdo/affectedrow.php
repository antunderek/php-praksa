<?php

$db = new PDO('mysql:host=localhost;dbname=project', 'inchoo', 'password');

$update = $db->query("
	UPDATE users
	SET active = 1
	WHERE last_name = 'Garrett'
");

echo $update->rowCount();
