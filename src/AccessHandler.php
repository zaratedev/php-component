<?php

namespace Zaratedev;

class AccessHandler
{
    public static function check($role)
    {
        return Auth::check() && Auth::user()->role === $role;
    }
}
