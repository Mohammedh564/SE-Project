<?php

class Report
{
    private string    $reportId;
    private string    $reportType;
    private \DateTime $date;

    public function __construct(string $reportId, string $reportType, \DateTime $date)
    {
        $this->reportId   = $reportId;
        $this->reportType = $reportType;
        $this->date       = $date;
    }

    public function generateReport(): string
    {
        // TODO: return path to generated file
        return '';
    }

    // Getters & Setters...
}
