<?php

class Admin extends User
{
    public function addUser(array $userData): bool { /* TODO */ return false; }
    public function editUser(string $userId): bool { /* TODO */ return false; }
    public function deleteUser(string $userId): bool { /* TODO */ return false; }
    public function generateReport(string $format): Report { /* TODO */ return new Report('','', new \DateTime()); }
    public function setScheduleReporting(\DateTime $date, string $reportType): bool { /* TODO */ return false; }
    public function assignTask(string $volId, string $taskId): bool { /* TODO */ return false; }
    public function viewLogs(): array { /* TODO */ return []; }
    public function viewDonationRecords(): array { /* TODO */ return []; }
    public function verifyDonation(string $donationID): bool { /* TODO */ return false; }
    public function verifyPayment(string $paymentID): bool { /* TODO */ return false; }
    public function trackDonation(string $donationId): ?Donation { /* TODO */ return null; }
    public function refundDonation(string $donationId): bool { /* TODO */ return false; }
    public function approveUser(string $userId): bool { /* TODO */ return false; }
}
