<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Program</title>
    <style>
       /* Add custom styles here */
    </style>
</head>
<body>
    <h1>ATM Program</h1>
    <form method="POST" action="atmincle.php">
        <label for="choice">Choose an option:</label>
        <select name="choice" id="choice" required>
            <option value="1">1. Check Balance</option>
            <option value="2">2. Deposit Money</option>
            <option value="3">3. Withdraw Money</option>
            <option value="4">4. Exit</option>
        </select>
        <input type="submit" name="submit" value="Submit">
    </form>


   
</body>
</html>
