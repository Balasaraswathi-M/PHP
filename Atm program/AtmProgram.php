<?php
// Start a session to store the balance
session_start();

// Initialize balance if not already set
if (!isset($_SESSION['balance'])) {
    $_SESSION['balance'] = 10000; // Initial balance
}

// Function to check balance
function checkBalance() {
    return "Your current balance is: ₹" . $_SESSION['balance'];
}

// Function to withdraw money
function withdrawMoney($amount) {
    if ($amount > $_SESSION['balance']) {
        return "Insufficient balance! Transaction failed.";
    } elseif ($amount <= 0) {
        return "Invalid amount! Please enter a positive value.";
    } else {
        $_SESSION['balance'] -= $amount;
        return "₹" . $amount . " has been withdrawn successfully. Updated balance: ₹" . $_SESSION['balance'];
    }
}

// Handle user actions
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choice = $_POST['choice'];
    if ($choice == '1') {
        $message = checkBalance();
    } elseif ($choice == '2') {
        $amount = (int)$_POST['amount'];
        $message = withdrawMoney($amount);
    } elseif ($choice == '3') {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Program</title>
</head>
<body>
    <h1>--- ATM Menu ---</h1>
    <form method="POST">
        <label for="choice">Choose an option:</label>
        <select name="choice" id="choice" required>
            <option value="1">1. Check Balance</option>
            <option value="2">2. Withdraw Money</option>
            <option value="3">3. Exit</option>
        </select>
        <br><br>
        <label for="amount">Enter amount (for withdrawal):</label>
        <input type="number" name="amount" id="amount" min="1">
        <br><br>
        <button type="submit">Submit</button>
    </form>
    <p><?php echo $message; ?></p>
</body>
</html>
