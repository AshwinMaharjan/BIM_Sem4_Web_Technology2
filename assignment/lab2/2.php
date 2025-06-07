<?php
// Create three numeric arrays
$array1 = [10, 20, 30, 40, 50];
$array2 = [60, 70, 80, 90, 100];
$array3 = [110, 120, 130, 140, 150];

// Display arrays using `for` loop
echo "Using `for` loop:<br>";
for ($i = 0; $i < 5; $i++) {
    echo "Array 1: " . $array1[$i] . " | ";
    echo "Array 2: " . $array2[$i] . " | ";
    echo "Array 3: " . $array3[$i] . "<br>";
}

echo "<br>Using `foreach` loop:<br>";

// Display arrays using `foreach` loop
echo "Array 1: ";
foreach ($array1 as $value) {
    echo $value . " ";
}
echo "<br>";

echo "Array 2: ";
foreach ($array2 as $value) {
    echo $value . " ";
}
echo "<br>";

echo "Array 3: ";
foreach ($array3 as $value) {
    echo $value . " ";
}
echo "<br>";
?>
