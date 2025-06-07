<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $product_name = ($_POST['product_name']);
    $description = ($_POST['description']);
    $quantity = ($_POST['quantity']);
    $price = ($_POST['price']);

    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file is an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (limit to 2MB)
    if ($_FILES["image"]["size"] > 2000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "<h2>Product Data Entered Successfully!</h2>";
            echo "<p><strong>Product Name:</strong> $product_name</p>";
            echo "<p><strong>Description:</strong> $description</p>";
            echo "<p><strong>Quantity:</strong> $quantity</p>";
            echo "<p><strong>Price:</strong> $price</p>";
            echo "<p><strong>Product Image:</strong></p>";
            echo "<img src='$target_file' alt='Product Image' style='width:300px;height:auto;'>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    echo "Invalid request.";
}
?>
