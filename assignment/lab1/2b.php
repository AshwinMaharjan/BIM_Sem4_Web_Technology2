<?php
function findSmallest($num1, $num2) {
    if ($num1 < $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

$num1 = 10;
$num2 = 20;
echo "The smallest number is " . findSmallest($num1, $num2);
?>
