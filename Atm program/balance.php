
<?php
$balance=10000;
function checkBalance($balance) {
    echo "<p>Your current balance is: ₹$balance</p>";
}
checkBalance($balance);
echo"<a href='Atmpro.php'><input type='button' name='Back' value='Back'></a>";
?>