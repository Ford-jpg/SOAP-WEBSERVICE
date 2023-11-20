<?php
// Request Model

class AccountBalanceService {

    private $db;

    public function __construct() {
        // Connect to the database
        $this->db = new mysqli('localhost', 'username', 'password', 'database');

        // Check connection
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function getAccountBalance($accountId) {
        // Check if the account exists
        $sql = "SELECT id FROM accounts WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $accountId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            return 'Invalid account ID';
        }

        // Prepare and execute the query
        $sql = "SELECT balance FROM accounts WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $accountId);
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch the account balance
        $row = $result->fetch_assoc();
        $balance = $row['balance'];

        // Return the account balance
        return $balance;
    }
}

// Assuming $accountId contains the valid account ID
$accountBalanceService = new AccountBalanceService();
$accountBalance = $accountBalanceService->getAccountBalance($accountId);

echo "Account balance: " . $accountBalance;
