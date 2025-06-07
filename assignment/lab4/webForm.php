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
<form action="insert.php" method="post" enctype="multipart/form-data">

	<label>Product Name:</label>
	<input type="text" name="productname">
    <label>Product Description:</label>
    <textarea name="productDescription"></textarea>
	<label>Product Quantity:</label>
	<input type="number" name="productQuantity">
	<label>Product Price:</label>
	<input type="number" name="productPrice">
    <br><br>
    <input type="file" name="productImage">

    <br><br>
    <input type="submit" value="Submit"> 
    <input type="reset" value="Cancel">
    
	
</form>
</body>
</html>