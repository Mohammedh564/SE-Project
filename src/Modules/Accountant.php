<?php

class Accountant extends User
{
    public function generateFinancialReport(string $format): Report { /* TODO */ return new Report('','', new \DateTime()); }
    public function trackDonation(string $donationId): ?Donation { /* TODO */ return null; }
    public function viewDonationRecords(): array { /* TODO */ return []; }
    public function verifyDonation(string $donationId): bool { /* TODO */ return false; }
    public function validateTransactions(object $transaction): bool { /* TODO */ return false; }
    public function refundDonation(string $donationId): bool { /* TODO */ return false; }
    public function verifyPayment(string $paymentId): bool { /* TODO */ return false; }
    public function manageRecurringDonations(): bool { /* TODO */ return false; }
}
