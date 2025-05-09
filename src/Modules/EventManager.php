<?php

class EventManager
{
    public function createEvent(array $eventData): Event { /* TODO */ return new Event('','', new \DateTime(),''); }
    public function editEvent(string $eventId, array $eventData): bool { /* TODO */ return false; }
    public function sendInvitations(): bool { /* TODO */ return false; }
}
