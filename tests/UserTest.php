<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        require 'User.php';

        $user = new User;

        $user->first_name   = "Teresa";
        $user->surname      = "Green";

        $this->assertEquals('Teresa Green', $user->getFullName());
    }

    public function testFullNameEmptyByDefaul()
    {
        $user = new User;

        $this->assertEquals('', $user->getFullName());
    }
}