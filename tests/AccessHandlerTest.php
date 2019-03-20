<?php

use Zaratedev\AccessHandler;

class AccessHandlerTest extends PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_grant_access()
    {
        $this->assertTrue(AccessHandler::check('admin'));
    }

    /** @test */
    public function it_deny_access()
    {
        $this->assertFalse(AccessHandler::check('editor'));
    }
}
