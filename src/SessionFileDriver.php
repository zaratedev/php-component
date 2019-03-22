<?php

namespace Zaratedev;

class SessionFileDriver
{
    public static function load()
    {
        $file = __DIR__ . '/../storage/session/session.json';

        if (file_exists($file)) {
            //
        }
    }
}
