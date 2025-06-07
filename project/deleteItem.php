<?php

// include("connect.php");

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"pirme_bim4th_2081");


try{
    sleep(2);
    $id=$_GET['id'];
    $q="DELETE FROM `item` WHERE id=$id";
    $result=mysqli_query($con,$q);
    echo "Data Delete Successfully";

} catch(Exception $ex){
    http_response_code(400);
    echo $ex->getMessage();
}

?>