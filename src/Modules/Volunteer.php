<?php

class Volunteer extends User
{
    private string $status;

    public function viewAssignedTasks(): array { /* TODO */ return []; }
    public function viewAssignedEvents(): array { /* TODO */ return []; }
    public function viewCampaigns(): array { /* TODO */ return []; }
    public function signUpForEvent(string $eventId): bool { /* TODO */ return false; }
    public function submitFeedback(string $feedback): bool { /* TODO */ return false; }
    public function filterCampaigns(): void { /* deleg. */ }
    public function register(array $userData): bool { /* TODO */ return false; }
    public function recoverPassword(string $email): bool { /* TODO */ return false; }
    public function updateProfile(array $newData): bool { /* TODO */ return false; }
    public function registerForCampaign(string $campaignId): bool { /* TODO */ return false; }
    public function helpInEvents(string $eventId): bool { /* TODO */ return false; }

    // Getter/Setter for status
    public function getStatus(): string { return $this->status; }
    public function setStatus(string $s): void { $this->status = $s; }
}
