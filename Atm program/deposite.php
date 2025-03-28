<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
</head>
<body>
    <form method="POST">
        <div>
            <label for="deposite">Deposit Amount:</label>
            <input type="text" id="deposite" name="deposite"><br/>
            <input type="submit" name="submit" value="Deposit">
            <input type="hidden" name="choice" value="<?php echo isset($_POST['choice']) ? $_POST['choice'] : ''; ?>">
          <a href='Atmpro.php'><input type="button" name="Back" value="Back"></a>
        </div>
    </form>

<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["deposite"])) {
        $deposite = $_POST["deposite"];
        $balance = 10000;  
       function deposit($deposite, $balance) 
       {
            $balance += (int)$deposite;
            echo "<p>₹$deposite deposited successfully! Current balance: ₹$balance.</p>";
            return $balance;
        }
    $balance = deposit($deposite, $balance);
    } else {
        echo "<p>Please enter a valid deposit amount!</p>";
    }
}
?>
</body>
</html>
