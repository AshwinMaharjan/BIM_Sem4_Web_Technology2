<?php
function addOne(&$number) {
    $number += 1;
}

$value = 5;
echo "Before function call: $value<br>";
addOne($value);
echo "After function call: $value";
?>
