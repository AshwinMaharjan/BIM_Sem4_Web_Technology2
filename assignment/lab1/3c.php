<?php
$number = 67485;
$reversedNumber = 0;

while ($number > 0) {
    $remainder = $number % 10;
    $reversedNumber = ($reversedNumber * 10) + $remainder;
    $number = intval($number / 10);
}

echo "Reversed number: $reversedNumber";
?>
