<?php
function divide($a, $b) {
    return $a / $b; // If $b is 0, PHP will throw an error automatically
}

try {
    echo divide(10, 0); // This will cause a division by zero error
} catch (DivisionByZeroError $e) {
    echo "Error: Cannot divide by zero!";
}
?>
