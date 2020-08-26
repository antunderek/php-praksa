<?php

class User
{
    public $username = 'alex';

    public function fullName()
    {
        return 'Alex Garrett';
    }

    public function avatar($size = 60)
    {
        return $size;
    }
}

$user = new User;
var_dump($user->avatar());
