<?php

/**
 * User
 *
 * A user of the system
 */
class User
{
    /**
     * First name
     *
     * @var string
     */
    private $firstName;

    /**
     * Last name
     *
     * @var string
     */
    private $surName;

    /**
     * Email
     *
     * @var string
     */
    private $email;

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return \User
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getSurName(): string
    {
        return $this->surName;
    }

    /**
     * @param string $surName
     * @return \User
     */
    public function setSurName(string $surName): self
    {
        $this->surName = $surName;

        return $this;
    }

    /**
     * Get the user's full name from their first name and surname
     *
     * @return string The user's full name
     */
    public function getFullName(): string
    {
        return trim("$this->firstName $this->surName");
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return \User
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}
