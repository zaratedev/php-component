<?php

namespace Zaratedev;

use Zaratedev\SessionManager as Session;

class Authenticator
{
    /**
     * @var mixed
     */
    protected $user;

    /** 
     * @var \Zaratedev\SessionManager
     */
    protected $session;

    /**
     * @param \Zaratedev\SessionManager $session
     */
    public function __construct($session)
    {
        $this->session = $session;
    }

    public function check()
    {
        return $this->user() != null;
    }

    public function user()
    {
        if ($this->user != null) {
            return $this->user;
        }
        
        $data = $this->session->get('user_data');

        if (! is_null($data)) {
            return $this->user = new User($data);
        }

        return null;
    }
}
