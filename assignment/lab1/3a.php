<?php
$firstNumber = 10;
$secondNumber = 2;

if ($secondNumber == 0) {
    echo "Division by zero is not allowed.";
} elseif ($firstNumber % $secondNumber == 0) {
    echo "$firstNumber is exactly divisible";
} else {
    echo "$firstNumber is not exactly divisible";
}
?>
