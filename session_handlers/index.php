<?php

$db = new PDO('mysql:host=127.0.0.1;dbname=project', 'inchoo', 'password');

class DatabaseSessionHandler implements SessionHandlerInterface
{
	protected $db;

	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public function close()
	{
		$this->db = null;

		if ($this->db === null) {
			return true;
		}

		return false;
	}

	public function destroy($id)
	{
		$statement = $this->db->prepare("
			DELETE FROM sessions WHERE id = :id
		");
		$delete = $statement->execute(['id' => $id]);
		if($delete) {
			return true;
		}
		return false;
	}

	public function gc($max) 
	{
		$limit = time() - $max;

		$statement = $this->db->prepare("
			DELETE FROM sessions WHERE access < :limit
		");

		$delete = $statement->execute(['limit' => $limit]);

		if ($delete) {
			return true;
		}
	}

	public function open($path, $name)
	{
		if ($this->db) {
			return true;
		}

		return false;
	}

	public function read($id)
	{
		$statement = $this->db->prepare("
			SELECT data FROM session
			WHERE id = :id
		");

		$statement->execute(['id' => $id]);

		if ($row = $statement->fetch(PDO::FETCH_OBJ)) {
			return $row->data;
		}

		return '';
	}

	public function write($id, $data)
	{
		$statement = $this->db->prepare("
			REPLACE INTO sessions VALUES (:id, :timestamp, :data)
		");

		$insert = $statement->execute([
			'id' => $id,
			'timestamp' => time(),
			'data' => $data
		]);

		if ($insert) {
			return true;
		}

		return false;
	}

}

$handler = new DatabaseSessionHandler($db);
session_set_save_handler($handler, true);
session_start();
//session_destroy();

//$_SESSION['name'] = 'alex';

echo $_SESSION['name'];
