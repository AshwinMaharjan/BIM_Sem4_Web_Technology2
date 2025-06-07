<?php
$numerator = 10;
$denominator = 2;

function div() {
    global $numerator, $denominator;
    if ($denominator != 0) {
        $result = $numerator / $denominator;
        echo "The result of division is: $result";
    } else {
        echo "Division by zero error.";
    }
}

div();
?>
