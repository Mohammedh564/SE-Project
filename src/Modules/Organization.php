<?php

class Organization
{
    private string $organizationId;
    private string $missionStatement;
    private string $campaignId;

    public function __construct(string $organizationId, string $missionStatement, string $campaignId)
    {
        $this->organizationId   = $organizationId;
        $this->missionStatement = $missionStatement;
        $this->campaignId       = $campaignId;
    }

    public function createCampaign(array $campaignData): Campaign { /* TODO */ return new Campaign('','',0.0,0.0,new \DateTime()); }
    public function viewCampaignProgress(string $campaignId): float { /* TODO */ return 0.0; }
    public function manageVolunteers(string $volId): bool { /* TODO */ return false; }

    // Getters & Setters...
}
