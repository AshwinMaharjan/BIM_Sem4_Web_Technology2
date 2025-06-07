<?php
// Create an associative array
$associative = [
    "Name" => "Ram Shrestha",
    "Age" => 30,
    "Occupation" => "Software Engineer"
];

// Display in tabular format
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
echo "<th>Key</th><th>Value</th>";
echo "</tr>";

echo "<tr><td>Name</td><td>" . $associative['Name'] . "</td></tr>";
echo "<tr><td>Age</td><td>" . $associative['Age'] . "</td></tr>";
echo "<tr><td>Occupation</td><td>" . $associative['Occupation'] . "</td></tr>";

echo "</table>";
?>
