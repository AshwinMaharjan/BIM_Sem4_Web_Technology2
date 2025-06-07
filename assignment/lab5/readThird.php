<?php
$file = 'data.txt';

$lineContent = ''; // Initialize an empty line content variable

if ($handle = fopen($file, 'r')) { // Open the file in read mode
    $lineNumber = 0;
    $desiredLine = 2; // We want the third line (index 2)

    while (($line = fgets($handle)) !== false) {
        if ($lineNumber == $desiredLine) {
            $lineContent = rtrim($line, "\r\n"); // Remove any newline characters
            break; // Exit the loop once the third line is found
        }
        $lineNumber++;
    }

    fclose($handle); // Close the file

    if ($lineContent !== '') {
        $message = $lineContent;
    } else {
        $message = "<div class='error'>The third line does not exist.</div>";
    }
} else {
    $message = "<div class='error'>File does not exist or cannot be opened.</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Specific Line from File</title>
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
        <?php echo $message; // Display the specific line or an error message ?>
    </div>
</body>
</html>
