<?php

use App\FileStore;

require 'vendor/autoload.php';

$s = new FileStore;

$s->set('name', 'Mo');
echo $s->get('name');
