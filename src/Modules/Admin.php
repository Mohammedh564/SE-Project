<?php
// to include User we write 

include_once 'User.php';
class Admin extends User
{
    private $connection;

    // public function __construct()
    // {
    //     $this->connection = new mysqli('localhost', 'root', '', 'OmarTest');
    //     if ($this->connection->connect_error) {
    //         die('Error in Connection: ' . $this->connection->connect_error);
    //     }
    // }

    public function addUser($username, $email, $password): bool
    {

        // Check if the connection is established
        if ($this->connection === null) {
            $this->connection = new mysqli('localhost', 'root', '', 'OmarTest');
        }
        if ($this->connection->connect_error) {
            die('Error in Connection: ' . $this->connection->connect_error);
        }

        $query = "INSERT INTO user (name, email, password) VALUES ('$username', '$email', '$password')";

        if ($this->connection->query($query) === TRUE) {
            echo '<script>alert("User added successfully!");</script>';
            return true;
        } else {
            echo '<script>alert("Error: ' . $this->connection->error . '");</script>';
            return false;
        }
    }

    public function deleteUser($username): bool
    {
        if ($this->connection === null) {
            $this->connection = new mysqli('localhost', 'root', '', 'OmarTest');
        }
        if ($this->connection->connect_error) {
            die('Error in Connection: ' . $this->connection->connect_error);
        }

        $query = "DELETE FROM user WHERE name = '$username'";

        if ($this->connection->query($query) === TRUE) {
            echo '<script>alert("User deleted successfully!");</script>';
            return true;
        } else {
            echo '<script>alert("Error: ' . $this->connection->error . '");</script>';
            return false;
        }
    }

    public function editUser(string $userId): bool
    { /* TODO */
        return false;
    }
    public function generateReport(string $format): Report
    { /* TODO */
        return new Report('', '', new \DateTime());
    }
    public function setScheduleReporting(\DateTime $date, string $reportType): bool
    { /* TODO */
        return false;
    }
    public function assignTask(string $volId, string $taskId): bool
    { /* TODO */
        return false;
    }
    public function viewLogs(): array
    { /* TODO */
        return [];
    }
    public function viewDonationRecords(): array
    { /* TODO */
        return [];
    }
    public function verifyDonation(string $donationID): bool
    { /* TODO */
        return false;
    }
    public function verifyPayment(string $paymentID): bool
    { /* TODO */
        return false;
    }
    public function trackDonation(string $donationId): ?Donation
    { /* TODO */
        return null;
    }
    public function refundDonation(string $donationId): bool
    { /* TODO */
        return false;
    }
    public function approveUser(string $userId): bool
    { /* TODO */
        return false;
    }
}
