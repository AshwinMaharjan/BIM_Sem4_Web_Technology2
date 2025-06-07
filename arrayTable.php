<?php
$bill=array(
    array("Pen",30,30),
    array("Copy",100,3),
    array("Book",500,7)
);
$sum=0;
echo "<table border=1><tr><th>Item<th>Price<th>Qty<th>Total</tr>";
for($i=0;$i<sizeof($bill);$i++){
    echo "<tr>";
    for ($j=0;$j<sizeof($bill[$i]);$j++){
        echo "<td>" .$bill[$i][$j]. "</td>";
    }
    $total=$bill[$i][1]*$bill[$i][2];
    echo "<td> $total </td>";
    $sum=$sum+$total;
    echo "</tr>";
    }
    echo "<tr>";
    echo "<td colspan=3> Total </td>";
    echo "<td> $sum </td>";
    echo "</table>";

