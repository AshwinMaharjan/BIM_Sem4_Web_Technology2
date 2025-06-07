<?php
$terms = 6;
$series = [];
$sum = 0;

for ($i = 1; $i <= $terms; $i++) {
    $currentTerm = $i * 10 + 2;
    $series[] = $currentTerm;
    $sum += $currentTerm;
}

echo "Series: " . implode("+", $series) . "<br>";
echo "Sum: $sum";
?>
