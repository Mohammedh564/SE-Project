<?php
// to include User we write 
include_once 'User.php';
include '../Controllers/DBController.php';
class Admin extends User
{
    public $db; 

    public function __construct()
    {
        // Initialize the DBController instance in the constructor
        $this->db = new DBController();
    }

    public function addUser($username, $email, $password): bool
    {

        // Check if the connection is established
        if ($this->db->openConnection()) {
            $query = "INSERT INTO user (name, email, password) VALUES ('$username', '$email', '$password')";

            if ($this->db->connection->query($query) === TRUE) {
                echo '<script>alert("User added successfully!");</script>';
                return true;
            } else {
                echo '<script>alert("Error: ' . $this->db->connection->error . '");</script>';
                return false;
            }
        }
        return false;
    }

    public function deleteUser($username): bool
    {
        if ($this->db->connection === null) {
            $this->db->connection = new mysqli('localhost', 'root', '', 'OmarTest');
        }
        if ($this->db->connection->connect_error) {
            die('Error in Connection: ' . $this->db->connection->connect_error);
        }

        $query = "DELETE FROM user WHERE name = '$username'";

        if ($this->db->connection->query($query) === TRUE) {
            echo '<script>alert("User deleted successfully!");</script>';
            return true;
        } else {
            echo '<script>alert("Error: ' . $this->db->connection->error . '");</script>';
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
