<form method="POST">
    <div id="deposite">
        <label for="deposite">Deposit Amount:</label>
        <input type="text" id="dep" name="deposite" value=""><br/>
    </div>
  <div id="withdraw">
        <label for="withdraw">Withdraw Amount:</label>
        <input type="text" id="withdraw" name="withdraw"><br/>
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
<?php
if (isset($_POST["submit"])) {
    $balance = 10000; // Initial balance
    $withdraw = isset($_POST["withdraw"]); 
    $deposite = isset($_POST["deposite"]); 
    $deposite=0;
    $choice = isset($_POST["choice"]) ? intval($_POST["choice"]) : 0;

  // Function to check balance
    function checkBalance($balance) {
        echo "<p>Your current balance is: ₹$balance</p>";
    }
     // Function to process withdrawal
    function withdraw($withdraw, $balance) {
        if ($withdraw > $balance) {
            echo "<p>Invalid! Insufficient funds.</p>";
        } else {
            $balance -= $withdraw;
            echo "<p>₹$withdraw withdrawn successfully! Current balance: ₹$balance.</p>";
        }
        return $balance;
    }
    // Function to process withdrawal
      function deposite($deposite, $balance) {
        if ($deposite < 0) {
            echo "<p>Invalid! Insufficient funds.</p>";
        } else {
            $balance += $deposite;
            echo "<p>₹$deposite Deposite successfully! Current balance: ₹$balance.</p>";
        }
        return $balance;
    }
 // Process based on user's choice
    switch ($choice) {
        case 1: // Check Balance
            checkBalance($balance);
            break;
        case 2: // Deposit
            $balance = deposite($deposite, $balance);
             break;
        case 3: // Withdraw
            $balance = withdraw($withdraw, $balance);
            break;
        case 4: // Exit
            echo "<p>Thank you for using our ATM service. Have a great day!</p>";
            exit;
            break;
       
    }
}
?>
</body>
</html>
