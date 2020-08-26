<?php

namespace App;

interface StorageInterface
{
	public function set($key, $value);
	public function get($key);
}


