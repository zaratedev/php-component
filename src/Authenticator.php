<?php

namespace Zaratedev;

class Authenticator
{
    protected $user;

    public static function check()
    {
        return static::user() != null;
    }

    public static function user()
    {
        if (static::$user != null) {
            return static::$user;
        }
        
        $data = Session::get('user_data');

        if (! is_null($data)) {
            static::$user = new User($data);
        }

        return null;
    }
}
