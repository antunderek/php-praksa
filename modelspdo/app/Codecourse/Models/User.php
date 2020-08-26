<?php

namespace Codecourse\Models;

class User extends Model
{
    protected $dates = [
        'created',
        'last_active'
    ];

    protected $hidden = [
        'password'
    ];

    public function getFullNameOrUsername()
    {
        return $this->getFullName() ?: $this->username;
    }
    public function getFullName()
    {
        if ($this->first_name && $this->last_name) {
            return "{$this->first_name} {$this->last_name}";
        }

        return null;
    }
}
