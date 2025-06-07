<?php
// Create an associative array
$associativeArray = [
    "Name" => "Alice",
    "Age" => 28,
    "Occupation" => "Designer",
    "Country" => "Nepal",
    "Language" => "Nepali"
];

// Display in tabular format using a loop
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
echo "<th>Key</th><th>Value</th>";
echo "</tr>";

foreach ($associativeArray as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}

echo "</table>";
?>
