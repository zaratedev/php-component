<?php

namespace Zaratedev;

class AccessHandler
{
    public static function check($role)
    {
        return 'admin' === $role;
    }
}
