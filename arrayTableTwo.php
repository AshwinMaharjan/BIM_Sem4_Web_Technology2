<?php
$arr=array(
    array("pen",30,30),
    array("copy",100,3),
    array("book",500,7)

);
$i=0;
echo "<table border=1>";
for($row=0;$row<sizeof($arr);$row++){
    echo "<tr>";
    for($col=0;$col<sizeof($arr[$i]);$col++){
        echo "<td>";
        echo $arr[$row][$col];
        echo "</td>";
        
    }
    echo "</tr>";
}
echo "</table>";