<?php
include("menu.php");
include("connect.php");
    $q = "SELECT id,username,status FROM `user`";
    $result = mysqli_query($con,$q);
    $table="<div class='main-content'><div class='title'>Item Details</div><div class='content'>";
    $table.="<table border=1 class='display_table'>";
    $table.="<tr><th>ID<th>User Name<th>Status<th colspan=2>Action</tr>";
    while($row = mysqli_fetch_array($result,MYSQLI_NUM)){ 
        $id=$row[0];
        $table.="<tr>";
            foreach($row as $value){ 
                $table.="<td>$value</td>";
            }
            $table.="<td><a class='btn delete' href='suspendUser.php?id=$id'>Suspend</a></td>";
            $table.="<td><a class='btn success' href='activateUser.php?id=$id'>Activate</a></td>";
            $table.="</tr>";
        }
        $table.="</table></div>";
        echo"$table";
?>