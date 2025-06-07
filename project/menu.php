<!DOCTYPE html>
<html>
<head>
	<title>Inventory Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/x-icon" href="images/favicon.jpg">
	<script src="jquery.js"></script>
<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">

	</style>
</head>
<body>
	<div class="nav-bar">
		<div class="system-name">Inventory System</div>
		<a href="destroySession.php"> Logout</a> 
		<div class="user">Welcome: <?php session_start(); echo $_SESSION['username']?>  </div>
		
	</div>
<div class="menu">
	<a href="form1.php">Insert Items</a>
	<a href="displayItem.php" >Display Items</a>
	<a href="userForm.php" >SingUp User</a>
	<a href="displayUser.php" >Display User</a>
	<a href="purchaseForm.php" >Purchase</a>
	<a href="" >Sale</a>
	<a href="" >Display Purchase Data</a>
	<a href="">Stock</a>
</div>