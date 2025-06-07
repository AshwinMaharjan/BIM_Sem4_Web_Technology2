<?php
$file = 'data.txt';

$message = '';

if (is_file($file)) { // Check if the file exists and is a regular file
    if (unlink($file)) { // Attempt to delete the file
        $message = "<div class='success'>data.txt has been deleted.</div>";
    } else {
        $message = "<div class='error'>Unable to delete the file.</div>";
    }
} else {
    $message = "<div class='error'>File does not exist.</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete File</title>
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
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
        }
        .success {
            padding: 10px;
            border-radius: 4px;
            background-color: #d4edda;
            color: #155724;
            text-align: center;
        }
        .error {
            padding: 10px;
            border-radius: 4px;
            background-color: #f8d7da;
            color: #721c24;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <?php echo $message; // Display the success or error message ?>
    </div>
</body>
</html>
