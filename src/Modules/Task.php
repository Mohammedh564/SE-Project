<?php

class Task
{
    private string    $taskId;
    private string    $description;
    private \DateTime $dueDate;
    private string    $status;

    public function __construct(string $taskId, string $description, \DateTime $dueDate, string $status)
    {
        $this->taskId      = $taskId;
        $this->description = $description;
        $this->dueDate     = $dueDate;
        $this->status      = $status;
    }

    public function assignTask(): bool { /* TODO */ return false; }
    public function updateTaskStatus(): bool { /* TODO */ return false; }

    // Getters & Setters...
}
