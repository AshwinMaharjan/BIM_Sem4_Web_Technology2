<?php

    /*
    basic three steps to execute any query

    connecting to database - mysqli_connect()
    selecting database - mysqli_select_db()
    executing query - mysqli_query()


    syntax 
    - mysqli_connect(servername,username,password)
    - mysqli_select_db(connection,db_name)
    - mysqli_query(connection,query)

    */
    $itemname=$_POST['itemname'];
    $price=$_POST['price'];
    $photo=$_POST['photo'];
    $remarks=$_POST['remarks'];

    $servername="localhost";
    $username="root";
    $password="";

try{
    // mysqli_connect("localhost","root","");
    $con=mysqli_connect($servername,$username,$password);
    mysqli_select_db($con,"pirme_bim4th_2081");
    // echo "databases password succesfully.";
   
    // echo "connection established successfully.";
    
    $q="INSERT INTO `item`(`itemName`, `price`, `stock`, `photo`, `remarks`) VALUES ($itemname,$price,0,$photo,$remarks)";
    
    echo "data inserted sucessfully.";
    mysqli_query($con,$q);
} catch (Exception $ex){
    echo "connection established FAILED";
}
?>