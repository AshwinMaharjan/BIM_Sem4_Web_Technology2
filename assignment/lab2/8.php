<?php
// Create a multidimensional array of associative arrays
$multiAssocArray = [
    ["Name" => "Alice", "Age" => 28, "Occupation" => "Designer"],
    ["Name" => "Bob", "Age" => 34, "Occupation" => "Engineer"],
    ["Name" => "Charlie", "Age" => 25, "Occupation" => "Artist"],
    ["Name" => "David", "Age" => 40, "Occupation" => "Teacher"]
];

// Display in tabular format
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse; text-align: center'>";
echo "<tr><th>Name</th><th>Age</th><th>Occupation</th></tr>";

foreach ($multiAssocArray as $person) {
    echo "<tr>";
    foreach ($person as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
