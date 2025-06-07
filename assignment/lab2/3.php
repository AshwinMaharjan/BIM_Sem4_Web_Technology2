<?php
// Array of students' marks
$students = [
    [85, 90, 78, 88, 95], // Student 1
    [70, 75, 80, 85, 90], // Student 2
    [50, 60, 55, 65, 70], // Student 3
    [40, 45, 50, 55, 60], // Student 4
    [90, 92, 88, 94, 96], // Student 5
    [30, 35, 40, 45, 50]  // Student 6
];

echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
echo "<th>Student</th><th>Subject 1</th><th>Subject 2</th><th>Subject 3</th><th>Subject 4</th><th>Subject 5</th><th>Total</th><th>Percentage</th><th>Result</th>";
echo "</tr>";

for ($i = 0; $i < count($students); $i++) {
    $total = array_sum($students[$i]);
    $percentage = $total / 5;
    
    // Determine the result based on the percentage
    if ($percentage > 80) {
        $result = "Distinction";
    } elseif ($percentage > 60) {
        $result = "First Division";
    } elseif ($percentage > 45) {
        $result = "Second Division";
    } else {
        $result = "Fail";
    }

    echo "<tr>";
    echo "<td>Student " . ($i + 1) . "</td>";
    foreach ($students[$i] as $marks) {
        echo "<td>$marks</td>";
    }
    echo "<td>$total</td>";
    echo "<td>$percentage%</td>";
    echo "<td>$result</td>";
    echo "</tr>";
}

echo "</table>";
?>
