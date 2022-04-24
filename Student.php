<?php

class Student
{
    private string $firstName;
    private string $lastName;
    private string $group;
    private float $mark;

    public function __construct($firstName, $lastName, $group, $mark)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->group = $group;
        $this->mark = $mark;
    }

    public function getScholarship(): float
    {
        return $this->mark == 5 ? 100 : 80;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    /**
     * @return float
     */
    public function getMark(): float
    {
        return $this->mark;
    }

    /**
     * @param float $mark
     */
    public function setMark(float $mark): void
    {
        $this->mark = $mark;
    }
}