<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment"; 

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// SQL query to fetch data from tbl_product
$q = "SELECT * FROM tbl_product";
$result = mysqli_query($con, $q);

if (mysqli_num_rows($result) > 0) {
    // Start table and add headers
echo '<table border="1" cellpadding="10" style="border-collapse:collapse">';
    echo "<tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
          </tr>";
    
    // Output data for each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['ID'] . "</td>
                <td>" . $row['productName'] . "</td>
                <td>" . $row['productDescription'] . "</td>
                <td>" . $row['productQuantity'] . "</td>
                <td>" . $row['productPrice'] . "</td>
                <td><img src='" . $row['productImage'] . "' width='100'></td>
                <td>
                    <form method='post' action='delete.php'>
                        <input type='hidden' name='delete_id' value='" . $row['ID'] . "'>
                        <input type='submit' value='DELETE'>
                    </form>
                </td>
              </tr>";
    }
    
    echo "</table>";
} else {
    echo "No records found.";
}

// Close connection
mysqli_close($con);
?>
