<?php
// Create a multidimensional array of numeric arrays
$multiArray = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

// Display in tabular format
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";

foreach ($multiArray as $row) {
    echo "<tr>";
    foreach ($row as $element) {
        echo "<td>$element</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
