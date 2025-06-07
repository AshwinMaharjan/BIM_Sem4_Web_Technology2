<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
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
        input[type="text"], input[type="email"], textarea, select {
            padding: 8px;
            margin-bottom: 10px;
            width: 300px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
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
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Student Form</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male"> Male 
        <input type="radio" id="female" name="gender" value="Female"> Female        
        <label for="country">Country:</label>
        <select id="country" name="country" required>
            <option value="">Select Country</option>
            <option value="Usa">USA</option>
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
        </select>
        
        <label for="notes">Notes:</label>
        <textarea id="notes" name="notes"></textarea> <br>
        
        <input type="submit" name="submit" value="Submit Data">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = ($_POST['name']);
        $address = ($_POST['address']);
        $email = ($_POST['email']);
        $gender = ($_POST['gender']);
        $country = ($_POST['country']);
        $notes = ($_POST['notes']);

            echo "<h2>Student Information</h2>";
            echo "<table>
                    <tr><th>Name</th><td>$name</td></tr>
                    <tr><th>Address</th><td>$address</td></tr>
                    <tr><th>Email</th><td>$email</td></tr>
                    <tr><th>Gender</th><td>$gender</td></tr>
                    <tr><th>Country</th><td>$country</td></tr>
                    <tr><th>Notes</th><td>$notes</td></tr>
                  </table>";
        }

    ?>
</body>
</html>
