<?php


$itemname=$_POST['itemname'];
$price=$_POST['price'];
$photo="";
$remarks=$_POST['remarks'];

$servername="localhost";
$username="root";
$password="";

try{

$con=mysqli_connect($servername,$username,$password);
mysqli_select_db($con,"pirme_bim4th_2081");

$q="INSERT INTO `item`(`itemName`, `price`, `stock`, `photo`, `remarks`) VALUES ('$itemname',$price,0,'$photo','$remarks')";
mysqli_query($con,$q);
echo "data inserted sucessfully.";
} catch (Exception $ex){
echo $ex->getMessage();
}
?>