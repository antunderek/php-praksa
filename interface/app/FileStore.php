<?php

namespace App;

class FileStore implements StorageInterface {
	public function set($key, $value)
	{
		file_put_contents($key . '.txt', $value);
	}

	public function get($key)
	{
		return file_getcontents($key . '.txt');
	}
}
