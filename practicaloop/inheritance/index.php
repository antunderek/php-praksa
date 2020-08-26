<?php

class Model
{
    protected $dates = [];

    public function __get($property)
    {
        if (in_array($property, $this->dates)) {
        return new DateTime($this->{$property});
    }

    return $this->{$property};
    }
}

class User extends Model
{
    protected $dates = ['createdAt'];
    protected $createdAt = '2016-01-01 12:30:00';
}

class Comment extends Model
{
    protected $dates = ['createdAt'];
    protected $createdAt = '2016-01-01 12:30:00';
}

$user = new User;
//$comment = new Comment;
var_dump($user->createdAt);
var_dump($user->createdAt->format('H:i'));
