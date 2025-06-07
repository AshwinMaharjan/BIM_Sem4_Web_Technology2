<?php
$terms = 20;
$series = [];
$sum = 0;

for ($i = 1; $i <= $terms; $i++) {
    $currentTerm = 2 * $i;
    $series[] = $currentTerm;
    $sum += $currentTerm;
}

echo "Series: " . implode(", ", $series) . "<br>";
echo "Sum: $sum";
?>
