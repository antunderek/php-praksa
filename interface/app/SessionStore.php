<?php

namespace App;

class SessionStore implements StorageInterface
{
	public function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public function get($key)
	{
		return $_SESSION[$key];
	}
}
