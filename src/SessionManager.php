<?php

namespace Zaratedev;

use Zaratedev\SessionFileDriver;

class SessionManager
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var boolean
     */
    protected $loaded = false;

    /**
     * @var \Zaratedev\SessionFileDriver
     */
    protected $sessionFileDriver;

    /**
     * @param \Zaratedev\SessionFileDriver $driver
     */
    public function __construct(SessionFileDriver $driver)
    {
        $this->sessionFileDriver = $driver;
    }

    protected function load()
    {
        if ($this->loaded) {
            return;
        }

        $this->data = $this->sessionFileDriver->load();

        $this->loaded = true;
    }
    
    public function get($key)
    {
        $this->load();

        return isset($this->data[$key])
            ? $this->data[$key]
            : null;
    }
}
