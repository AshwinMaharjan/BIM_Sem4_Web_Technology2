<?php
// Array of bill items
$bill = [
    ["Book", 600, 16],
    ["Copy", 450, 20],
    ["Pen", 300, 32]
];

$sum = 0;

// Start the table and add table headers
echo "<table border='1' cellpadding='5' cellspacing='0' style='border-collapse: collapse;'>";
// echo "<tr>";
// echo "<th>Title of Goods</th>";
// echo "<th>Price</th>";
// echo "<th>Quantity</th>";
// echo "<th>Total</th>";
// echo "</tr>";

echo "<tr><th>Title of Goods<th>Price<th>Quantity<th>Total</tr>";

// Loop through the bill items
foreach ($bill as $item) {
    echo "<tr>";
    // Loop through each item detail (Title, Price, Quantity)
    foreach ($item as $detail) {
        echo "<td>$detail</td>";
    }
    // Calculate the total price for the current item
    $total = $item[1] * $item[2];
    echo "<td>$total</td>";
    
    // Add the total to the sum
    $sum += $total;
    echo "</tr>";
}

// Display the sum total
echo "<tr>";
echo "<td colspan='3' style='text-align:center;'><strong>Sum Total</strong></td>";
echo "<td><strong>$sum</strong></td>";
echo "</tr>";
echo "</table>";
?>
