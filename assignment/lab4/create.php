<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "assignment"; // Replace with your database name

// Create connection
try{
    $con=mysqli_connect($servername,$username,$password,$dbname);

    $q = "CREATE TABLE tbl_product (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        productName VARCHAR(100) UNIQUE,
        productDescription VARCHAR(200),
        productQuantity INT,
        productPrice INT,
        productImage VARCHAR(100)
    )";
    
    mysqli_query($con,$q);
    echo "Table Created Succesfully.";
    } catch (Exception $ex){
    echo $ex->getMessage();
    }

?>