<?php

namespace Zaratedev;

class AccessHandler
{
    /**
     * @var \Zaratedev\Authenticator
     */
    protected $auth;
    
    /**
     * @param \Zaratedev\Authenticator $auth
     */
    public function __construct($auth)
    {
        $this->auth = $auth;
    }

    public function check($role)
    {
        return $this->auth->check() && $this->auth->user()->role == $role;
    }
}
