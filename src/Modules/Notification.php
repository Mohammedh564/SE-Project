<?php

class Notification
{
    private string    $notificationId;
    private string    $recipientId;
    private string    $message;
    private \DateTime $date;

    public function __construct(string $notificationId, string $recipientId, string $message, \DateTime $date)
    {
        $this->notificationId = $notificationId;
        $this->recipientId    = $recipientId;
        $this->message        = $message;
        $this->date           = $date;
    }

    public function send(): bool { /* TODO */ return false; }
    public function view(): string { return $this->message; }

    // Getters & Setters...
}
