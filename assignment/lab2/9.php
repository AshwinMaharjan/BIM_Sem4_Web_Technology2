<?php
// Create an associative array
$associativeArray = [
    "Alice" => 90,     "Bob" => 85,    "Charlie" => 92,    "David" => 88,    "Eve" => 76
];

// Display before sorting
echo "<h3>Before Sorting:</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
echo "<tr><th>Name</th><th>Score</th></tr>";
foreach ($associativeArray as $name => $score) {
    echo "<tr><td>$name</td><td>$score</td></tr>";
}
echo "</table>";

// Sort in descending order by value
arsort($associativeArray);

// Display after sorting
echo "<h3>After Sorting:</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
echo "<tr><th>Name</th><th>Score</th></tr>";
foreach ($associativeArray as $name => $score) {
    echo "<tr><td>$name</td><td>$score</td></tr>";
}
echo "</table>";
?>
