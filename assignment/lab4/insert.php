<?php
$productName = $_POST['productname'];
$productDescription = $_POST['productDescription'];
$productQuantity = $_POST['productQuantity'];
$productPrice = $_POST['productPrice'];

// Handling file upload
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["productImage"]["name"]);
if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $target_file)) {
    $productImage = $target_file;
} else {
    $productImage = ""; // Handle the error case appropriately
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment"; 

try {
    $con = mysqli_connect($servername, $username, $password, $dbname);

    $q="INSERT INTO tbl_product (productName, productDescription, productQuantity, productPrice, productImage) VALUES ('$productName','$productDescription',$productQuantity,$productPrice,'$productImage')";
    mysqli_query($con,$q);
    
    echo "Data Inserted Successfully.";
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
