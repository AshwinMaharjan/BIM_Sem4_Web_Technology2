<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment"; 

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['delete_id'])) {
    // Get the ID to delete
    $id_to_delete = $_POST['delete_id'];
    
    // SQL query to delete the selected row
    $q = "DELETE FROM tbl_product WHERE ID = $id_to_delete";
    
    if (mysqli_query($con, $q)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "No ID provided for deletion.";
}

?>
