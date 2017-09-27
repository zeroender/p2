<?php

require('helpers.php');

class workWeekSchedule
{
    /**
     * Properties
     */
    private $fullName;
    private $daysToWork;
    private $workNights;

    /**
     *
     */
    public function __construct($firstName, $lastName, $daysToWork, $workNights)
    {
        $this->fullName = $firstName . ' ' . $lastName;
        $this->daysToWork = $daysToWork;
        $this->workNights = $workNights;
    }

    /**
     * return the (sanitized) value of fullName
     */
    public function getFullName()
    {
        return sanitize($this->fullName);
    }

    /**
     * return the (sanitized) value of daysToWork array
     */
    public function getDaysToWork()
    {
        return sanitize($this->daysToWork);
    }

    /**
     * return the (sanitized) value of workNights
     */
    public function getWorkNights()
    {
        return sanitize($this->workNights);
    }
}