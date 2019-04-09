<?php

use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{
    private $user;

    /**
     * {@inheritDoc}
     */
    public function setUp()
    {
        $this->user = new User;
    }

    /**
     * @return \Mailer|\PHPUnit\Framework\MockObject\MockObject
     */
    private function createMockMailer()
    {
        return $this->getMockBuilder(Mailer::class)->setMethods(null)->getMock();
    }

    /**
     * Send Message
     */
    public function testSendMessage(): void
    {
        $mockMailer = $this->createMockMailer();
        $message = 'Hello';

        $this->user->setEmail('jon@dou.com');

        $sendMessageResult = $mockMailer->sendMessage($this->user->getEmail(), 'Hello');

        $this->assertEquals($sendMessageResult, sprintf('send %s to %s', $message, $this->user->getEmail()));
    }
}