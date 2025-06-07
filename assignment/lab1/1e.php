<?php
function factorial($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

$number = 5; // Change this value to test with other numbers
echo "The factorial of $number is " . factorial($number);
?>
