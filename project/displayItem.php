<?php
include("menu.php");
include("connect.php");
    $q = "SELECT * FROM `item`";
    $result = mysqli_query($con,$q);
    $table="<div class='main-content'><div class='title'>Item Details</div><div class='content'>";
    $table.="<table border=1 class='display_table'>";
    $table.="<tr><th>ID<th>Item Name<th>Price<th>Quantity<th>Remarks<th>Photo<th colspan=2>Options</tr>";
    while($row = mysqli_fetch_array($result,MYSQLI_NUM)){ 
        $id=$row[0];
        $table.="<tr>";
            foreach($row as $value){ 
                $table.="<td>$value</td>";
            }
            $table.="<td><a class='btn delete' href='deleteItem.php?id=$id' onclick='return deleteItem($id)'>Delete</a></td>";
            $table.="<td><a class='btn success' href='view.php?id=$id'>View</a></td>";
            $table.="</tr>";
        }
        $table.="</table></div>";
        echo"$table";
?>