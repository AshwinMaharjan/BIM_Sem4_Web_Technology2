<?php
    session_start();
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $q="select * from user where username='$username' and password='$password' and status='active'";
    $result=mysqli_query($con,$q);
    if($row=mysqli_fetch_array($result)){
       if(isset($_POST['remUser'])){
        setcookie("username",$username,time()+60);
        setcookie("password",$password,time()+60);
       }
        $_SESSION['username']=$username;
        header("location:menu.php");

    }else{
        echo "LOGIN FAIL!";

    }
    ?>



