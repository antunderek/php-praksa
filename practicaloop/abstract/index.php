<?php

abstract class Service
{
    abstract public function getRedirectUri();
}

class FacebookService extends Service implements serv 
{
    public function getRedirectUri()
    {
        return 'uri';
    }

    public static function hello()
    {
        echo "hello";
    }
}

class TwitterService extends FacebookService
{
    /*public function getRedirectUri()
    {
        return 'uri';
    }
     */
}

class GoogleService extends Service
{
    public function getRedirectUri()
    {
        return 'uri';
    }
}

$google = new GoogleService;
var_dump($google->getRedirectUri());
