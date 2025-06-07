<?php
$file = 'data.txt';

$content = ''; // Initialize an empty content variable

if ($handle = fopen($file, 'r')) { // Open the file in read mode
    while (!feof($handle)) { // Read until the end of the file
        $content .= fread($handle, 8192); // Read in chunks
    }
    fclose($handle); // Close the file
    $message = nl2br($content); // Convert newlines to <br> for HTML display
} else {
    $message = "<div class='error'>File does not exist or cannot be opened.</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read from File</title>
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
        .content-container {
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow-y: auto;
            max-height: 70vh; /* Limiting the height of the content container */
        }
        .error {
            padding: 10px;
            border-radius: 4px;
            background-color: #f8d7da;
            color: #721c24;
            text-align: center;
        }
        pre {
            white-space: pre-wrap; /* Wraps text like normal paragraphs */
            word-wrap: break-word; /* Breaks long words at the end of lines */
        }
    </style>
</head>
<body>
    <div class="content-container">
        <pre><?php echo $message; // Display the file content or an error message ?></pre>
    </div>
</body>
</html>
