<?php
	include("menu.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <style>
        label{
            display: block;
            margin-top: 30px;
        }
    </style>
</head>
<body>
<form action="data.php" method="post" enctype="multipart/form-data">
<div class="main-content">
    <div class="title">Insert Items</div>
    <div class="content">


	<label>Item Name</label>
	<input type="text" name="itemname">
	<label>Quantity</label>
	<input type="text" name="quantity">
	<label>Price</label>
	<input type="text" name="price">
	<label for="photo" name="photo" >Photo</label>
    <input type="file" name="photo">
	<label>Remarks</label>
	<input type="text" name="remarks">

    <!-- <a href="demo1.php"> -->
	
    <input type="submit" name="" class="btn success">
	
</form>
</body>
</html>