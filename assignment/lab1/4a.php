<?php
// Array to store data
$wt1=20; $wt2=30;
$eco1=30; $eco2=20;
$eng1=35; $eng2=36;


$data = [
    ['sn' => 1, 'WT' => $wt1, 'Eco' => $eco1, 'English' => $eng1, 'Total' => $wt1+$eco1+$eng1, 'Remarks' => 'Second'],
    ['sn' => 2, 'WT' => $wt2, 'Eco' => $eco2, 'English' => $eng2, 'Total' => $wt2+$eco2+$eng2, 'Remarks' => 'First']
];

// Start the table
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; text-align: center; width: 50%;'>";
echo "<tr>";
echo "<th rowspan='2'>S.N.</th>";
echo "<th colspan='3'>Subjects</th>";
echo "<th rowspan='2'>Total</th>";
echo "<th rowspan='2'>Remarks</th>";
echo "</tr>";

echo "<tr>";
echo "<th>WT</th>";
echo "<th>Eco</th>";
echo "<th>English</th>";
echo "</tr>";

// Loop through data and generate table rows
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>{$row['sn']}</td>";
    echo "<td>{$row['WT']}</td>";
    echo "<td>{$row['Eco']}</td>";
    echo "<td>{$row['English']}</td>";
    echo "<td>{$row['Total']}</td>";
    echo "<td>{$row['Remarks']}</td>";
    echo "</tr>";
}

// End the table
echo "</table>";
?>
