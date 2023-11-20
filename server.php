<?php

// Include the AccountBalanceService class

require_once 'AccountBalanceService.php';

// Handle incoming requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract the account ID from the request body
    $accountId = $_POST['accountId'];

    // Create an instance of the AccountBalanceService
    $accountBalanceService = new AccountBalanceService();

    // Get the account balance
    $accountBalance = $accountBalanceService->getAccountBalance($accountId);

    // Respond with the account balance in JSON format
    header('Content-Type: application/json');
    echo json_encode(['accountBalance' => $accountBalance]);
} else {
    // Handle invalid requests
    header('HTTP/1.1 400 Bad Request');
}
