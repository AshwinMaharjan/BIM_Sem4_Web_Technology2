<?php
$message = ''; // Initialize an empty message variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = fopen('data.txt', 'a'); // Open the file in append mode
    if ($file) {
        fwrite($file, $_POST['data'] . PHP_EOL); // Write the data with a newline
        fclose($file); // Close the file
        $message = "<div class='success'>Data written to data.txt</div>";
    } else {
        $message = "<div class='error'>Unable to open the file.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write to File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        .message-container {
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            resize: vertical;
            font-size: 14px;
        }
        button {
            padding: 10px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        .success, .error {
            padding: 10px;
            border-radius: 4px;
            text-align: center;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <?php echo $message; // Display the message if it's set ?>
    </div>
    <form method="post">
        <label for="data">Enter some text:</label>
        <textarea rows="10" cols="50" id="data" name="data" required></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
