<?php
include ("menu.php");

echo '<div class=main-content">
    <div class=title>Message</div>
    <div class=content">';

try{
$id=$_GET['id'];
include("connect.php");

$q="UPDATE `user` SET `status`='active' WHERE id=$id";
mysqli_query($con,$q);
echo "<div class='msg success'> User Status Updated Successfully</div>";
} 
catch (Exception $ex){
    http_response_code(400);
    echo $ex->getMessage();
}
?>