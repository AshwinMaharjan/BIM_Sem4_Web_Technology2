<?php
// Create three numeric arrays
$array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];
$array3 = [11, 12, 13, 14, 15];

// Merge the arrays
$mergedArray = array_merge($array1, $array2, $array3);

// Display the total number of elements before slicing
echo "Total elements before slicing: " . count($mergedArray) . "<br>";

// Slice the array to get elements from index 2 to 7 (i.e., 3rd to 8th element)
$slicedArray = array_slice($mergedArray, 2, 6);

// Display the sliced array
echo "Sliced Array: ";
foreach ($slicedArray as $value) {
    echo $value . " ";
}
?>
