<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        $this->user = new User;
    }

    /**
     * Returns Full Name
     */
    public function testReturnsFullName(): void
    {
        $this->user->setFirstName('Teresa')->setSurName('Green');

        $this->assertEquals('Teresa Green', $this->user->getFullName());
    }

    /**
     * Full Name Is Empty By Default
     */
    public function testFullNameIsEmptyByDefault(): void
    {
        $this->assertEquals('', $this->user->getFullName());
    }
}