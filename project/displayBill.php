<?php
include "menu.php";
$id=$_GET['id'];

include "connect.php";
$q="SELECT `itemName`,`price`,`quantity` FROM 'bill' WHERE vendor_id=$id";
$result=mysqli_query($con,$q);

$q1="SELECT * FROM purchase WHERE id=$id";
$result1=mysqli_query($con,$q1);



?>