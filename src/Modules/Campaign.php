<?php

class Campaign
{
    private string    $campaignId;
    private string    $title;
    private float     $targetAmount;
    private float     $collectedAmount;
    private \DateTime $startDate;

    public function __construct(string $campaignId, string $title, float $targetAmount, float $collectedAmount, \DateTime $startDate)
    {
        $this->campaignId     = $campaignId;
        $this->title          = $title;
        $this->targetAmount   = $targetAmount;
        $this->collectedAmount= $collectedAmount;
        $this->startDate      = $startDate;
    }

    public function trackProgress(): float
    {
        return $this->collectedAmount / max($this->targetAmount, 1) * 100;
    }

    public function viewCampaignDetails(): Campaign
    {
        return $this;
    }

    // Getters & Setters...
    public function getCampaignId(): string { return $this->campaignId; }
    public function setCampaignId(string $id): void { $this->campaignId = $id; }

    public function getTitle(): string { return $this->title; }
    public function setTitle(string $t): void { $this->title = $t; }

    public function getTargetAmount(): float { return $this->targetAmount; }
    public function setTargetAmount(float $amt): void { $this->targetAmount = $amt; }

    public function getCollectedAmount(): float { return $this->collectedAmount; }
    public function setCollectedAmount(float $amt): void { $this->collectedAmount = $amt; }

    public function getStartDate(): \DateTime { return $this->startDate; }
    public function setStartDate(\DateTime $d): void { $this->startDate = $d; }
}
