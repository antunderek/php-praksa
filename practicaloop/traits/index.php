<?php

interface AuthenticableInterface
{
    public function getPassword();
    public function setPassword();
}


trait Authenticable
{
    public function getPassword()
    {
    }

    public funtion setPassword($password)
    {
        $this->password = $password;
    }
}

class User implements AuthenticableInterface
{
    use Authenticable;
}

class Admin implements AuthenticableInterface
{
    use Authenticable;
}
