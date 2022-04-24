<?php

class Aspirant extends Student
{
    private string $scientificWork;

    public function __construct($firstName, $lastName, $group, $mark, $scientificWork)
    {
        parent::__construct($firstName, $lastName, $group, $mark);
        $this->scientificWork = $scientificWork;
    }

    public function getScholarship(): float
    {
        return parent::getMark() == 5 ? 200 : 180;
    }

    /**
     * @return string
     */
    public function getScientificWork(): string
    {
        return $this->scientificWork;
    }

    /**
     * @param string $scientificWork
     */
    public function setScientificWork(string $scientificWork): void
    {
        $this->scientificWork = $scientificWork;
    }

}