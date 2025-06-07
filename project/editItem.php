<?php
	include("menu.php");
	$id=$_GET['id'];
$q = "SELECT * FROM `item` WHERE id=$id";
	include("connect.php");
	
$result=mysqli_query($con,$q);
$row = mysqli_fetch_array($result,MYSQLI_NUM);

?>
<div class="main-content">
	<div class="title"> Item Details Entry Form</div>
	<div class="content">
		
	<form action="updateItem.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">

	<label>Item Name</label>
	<input type="text" name="itemname" value="<?php echo $row[1]; ?>">
	<label>Quantity</label>
	<input type="text" name="quantity" value="<?php echo $row[2]; ?>">
	<label>Price</label>
	<input type="text" name="price" value="<?php echo $row[3]; ?>">
	<label for="photo">Photo</label>
    <input type="file" name="photo">
	<label>Remarks</label>
	<input type="text" name="remarks" value="<?php echo $row[5]; ?>">

    <input type="submit" value="Update" name="btn" class="btn success">
	
</form>
</body>
</html>