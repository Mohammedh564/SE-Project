<?php

class Guest implements PlateformUser
{
    public function viewCampaigns(): array { /* TODO */ return []; }
    public function viewCampaignDetails(string $campaignId): ?Campaign { /* TODO */ return null; }
    public function makeOneTimeDonation(array $donationData): Donation { /* TODO */ return new Donation('',0.0,new \DateTime(),''); }
    public function makeRecurringDonation(array $donationData): Donation { /* TODO */ return new Donation('',0.0,new \DateTime(),''); }
    public function donateToCampaign(string $campaignId): bool { /* TODO */ return false; }
    public function filterCampaigns(string $filter): array { /* TODO */ return []; }
    public function resetCampaignFilters(): void { /* TODO */ }
    public function register(array $userData): bool { /* TODO */ return false; }
    public function updateProfile(array $newData): bool { /* TODO */ return false; }
    public function login(string $userName, string $password): bool { /* TODO */ return false; }
    public function logout(): bool { /* TODO */ return false; }
}
