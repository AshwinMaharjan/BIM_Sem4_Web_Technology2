<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Master</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 5px 0;
        }
        input[type="text"], input[type="number"], input[type="file"], textarea {
            padding: 8px;
            margin-bottom: 10px;
            width: 300px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"], input[type="reset"] {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        input[type="reset"] {
            background-color: #f44336;
            color: white;
        }
        input[type="reset"]:hover {
            background-color: #e7352e;
        }
    </style>
</head>
<body>
    <form method="post" action="product.php" enctype="multipart/form-data">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required min="1">
        
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required step="0.01">
        
        <label for="image">Product Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>

        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Cancel">
    </form>
</body>
</html>
