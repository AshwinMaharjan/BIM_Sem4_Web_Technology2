<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Form Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="email"] {
            padding: 8px;
            margin-bottom: 10px;
            width: 300px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        table {
            /* width: 100%; */
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Form Submission</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
    }
    ?>
        <h2>Submitted Data</h2>
        <table>
            <tr><th>Name</th><td><?php echo $name; ?></td></tr>
            <tr><th>Address</th><td><?php echo $address; ?></td></tr>
            <tr><th>Email</th><td><?php echo $email; ?></td></tr>
        </table>

</body>
</html>
