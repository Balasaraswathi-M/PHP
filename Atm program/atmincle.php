<?php
if (isset($_POST['choice'])) {
    $choice = $_POST['choice']; // Choice will be a string, so use == for comparison
    
    if ($choice == 1) {
        include 'balance.php';  // This should handle checking balance
    } elseif ($choice == 2) {
        include 'deposite.php';  // This should handle depositing money
    } elseif ($choice == 3) {
        include 'withdraw.php'; // This should handle withdrawal of money
    } elseif ($choice == 4) {
        echo "<p>Thank you for using the ATM! Goodbye!</p>";
    }
}
?>