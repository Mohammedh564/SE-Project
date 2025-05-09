<?php

class Donation
{
    private string   $donationId;
    private float    $amount;
    private \DateTime $date;
    private string   $status;

    public function __construct(string $donationId, float $amount, \DateTime $date, string $status)
    {
        $this->donationId = $donationId;
        $this->amount     = $amount;
        $this->date       = $date;
        $this->status     = $status;
    }

    public function processDonation(): bool
    {
        // TODO
        return false;
    }

    public function viewDonationDetails(string $donationId): ?Donation
    {
        // TODO
        return null;
    }

    // Getters & Setters
    public function getDonationId(): string { return $this->donationId; }
    public function setDonationId(string $id): void { $this->donationId = $id; }

    public function getAmount(): float { return $this->amount; }
    public function setAmount(float $amount): void { $this->amount = $amount; }

    public function getDate(): \DateTime { return $this->date; }
    public function setDate(\DateTime $date): void { $this->date = $date; }

    public function getStatus(): string { return $this->status; }
    public function setStatus(string $status): void { $this->status = $status; }
}
