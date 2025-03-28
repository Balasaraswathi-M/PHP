<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw</title>
</head>
<body>
<form method="POST">
    <div>
        <label for="withdraw">Withdraw Amount:</label>
        <input type="text" id="withdraw" name="withdraw"><br/>
        <input type="submit" name="submit">
        <input type="hidden" name="choice" value="<?php echo isset($_POST['choice']) ? $_POST['choice'] : ''; ?>">
        <a href='Atmpro.php'><input type="button" name="Back" value="Back"></a>
    </div>
</form>

<?php
if (isset($_POST["submit"]))
 { 
    if (isset($_POST["withdraw"])) {
    $withdraw = $_POST["withdraw"];
    $balance = 10000;

    // Function to process the withdrawal
    function withdraw($withdraw, $balance) {
        if ($withdraw > $balance) {
            echo "<p>Insufficient funds! You cannot withdraw more than your balance.</p>";
        } else {
            // Process the withdrawal
            $balance -= (int)$withdraw;
            echo "<p>₹$withdraw withdrawn successfully! Your current balance is ₹$balance.</p>";
        }
        return $balance;
    }
    
    $balance = withdraw($withdraw, $balance);
}
}
?>
</body>
</html>
