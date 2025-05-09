<?php

class Donor extends User
{
    private CampaignFilterService $filterService;

    public function __construct(string $userId, string $name, string $email, string $password, CampaignFilterService $filterService)
    {
        parent::__construct($userId, $name, $email, $password);
        $this->filterService = $filterService;
    }

    public function viewCampaigns(): array
    {
        // TODO
        return [];
    }

    public function viewCampaignDetails(string $campaignId): ?Campaign
    {
        // TODO
        return null;
    }

    public function filterCampaigns(): void
    {
        // delegated to service
    }

    public function viewDonationHistory(): array
    {
        // TODO
        return [];
    }

    public function resetCampaignFilters(): void
    {
        // TODO
    }

    public function makeOneTimeDonation(array $donationData): Donation
    {
        // TODO
        return new Donation('', 0.0, new \DateTime(), '');
    }

    public function makeRecurringDonation(array $donationData): Donation
    {
        // TODO
        return new Donation('', 0.0, new \DateTime(), '');
    }

    public function setDonationSchedule(string $donationId, string $frequency): bool
    {
        // TODO
        return false;
    }

    public function cancelRecurringDonation(): bool
    {
        // TODO
        return false;
    }

    public function selectDonationType(string $type): void
    {
        // TODO
    }

    public function trackDonation(string $donationId): ?Donation
    {
        // TODO
        return null;
    }

    public function donateToCampaign(array $donationData, string $campaignId): Donation
    {
        // TODO
        return new Donation('', 0.0, new \DateTime(), '');
    }

    public function recoverPassword(string $email): bool { /* TODO */ return false; }
}
