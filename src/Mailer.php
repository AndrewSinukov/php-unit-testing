<?php

class Mailer
{
    /**
     * Send Message
     *
     * @param string $email
     * @param string $message
     * @return string
     */
    public function sendMessage(string $email, string $message): string
    {
        return "send $message to $email";
    }
}