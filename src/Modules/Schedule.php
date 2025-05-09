<?php

class Schedule
{
    private string    $scheduleId;
    private string    $frequency;
    private \DateTime $startDate;
    private \DateTime $endDate;
    private string    $status;

    public function __construct(string $scheduleId, string $frequency, \DateTime $startDate, \DateTime $endDate, string $status)
    {
        $this->scheduleId = $scheduleId;
        $this->frequency  = $frequency;
        $this->startDate  = $startDate;
        $this->endDate    = $endDate;
        $this->status     = $status;
    }

    // Getters & Setters...
}
