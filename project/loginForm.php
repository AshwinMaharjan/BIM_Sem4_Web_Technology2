<?php
$username="";
$password="";
if(isset($_COOKIE['username'])){
    $username=$_COOKIE['username'];
    $password=$_COOKIE['password'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="main-content">
    <div class="title">Login User</div>
    <div class="content">
    <form action="loginCheck.php" method="post" enctype="multipart/form-data">
    <label> User Name </label>
        <input type="text" name="username" value=<?php echo $username; ?>>
        <label> Password </label>
        <input type="text" name="password" value=<?php echo $password; ?>>

        <input type="checkbox" name="remUser">Remember User? <br>

        <input type="submit" value="Log In" name="" class="btn success">

</form>
        
    
</body>
</html>