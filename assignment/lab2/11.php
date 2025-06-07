<?php
// Create a numeric array
$array = [10, 20, 30, 40];

// Add two elements at the front
array_unshift($array, 5, 15);

// Add two elements at the end
array_push($array, 50, 60);

// Display the array after adding elements
echo "Array after adding elements: ";
foreach ($array as $value) {
    echo $value . " ";
}
echo "<br>";

// Remove the final element
array_pop($array);

// Display the array after removing the final element
echo "Array after removing the final element: ";
foreach ($array as $value) {
    echo $value . " ";
}
?>
