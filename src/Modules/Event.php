<?php

class Event
{
    private string    $eventId;
    private string    $eventName;
    private \DateTime $eventDate;
    private string    $location;

    public function __construct(string $id, string $name, \DateTime $date, string $loc)
    {
        $this->eventId   = $id;
        $this->eventName = $name;
        $this->eventDate = $date;
        $this->location  = $loc;
    }

    public function viewEventDetails(): Event { return $this; }
    public function registerVolunteer(): bool { /* TODO */ return false; }

    // Getters & Setters...
}
