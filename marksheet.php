<?php
$marks=array(
    array("Ashwin",60,70,80,90,100),
    array("Soyal",88,76,56,34,98),
    array("Rojina",45,56,67,78,89),
    array("Yujal",98,55,34,45,56),
    array("Rojan",98,65,45,76,78),
    array("Nischal",76,55,45,87,99),
);
$total=0;
$average=0;
echo "<table border=1 width=50% cellspacing=0><tr><th>Name<th>Web<th>Economics<th>Acc<th>DBMS<th>OS<th>Total<th>Average Marks</tr>";
for($i=0;$i<sizeof($marks);$i++){
    echo "<tr>";
    for($j=0;$j<sizeof($marks[$i]);$j++){
        echo "<td>" .$marks[$i][$j]. "</td>";
    }
    $total=$marks[$i][1]+$marks[$i][2]+$marks[$i][3]+$marks[$i][4]+$marks[$i][5];
    $average=$total/5;
    echo "<td> $total </td>";
    echo "<td> $average </td>";
    echo "</tr>";
}
echo "</table>";

