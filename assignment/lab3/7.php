<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"], select {
            padding: 8px;
            margin: 5px 0;
            width: 100px;
            box-sizing: border-box;
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
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        <input type="number" name="num1" step="any" placeholder="Number 1" required>
        <select name="operation" required>
            <option value="+">Add</option>
            <option value="-">Subtract</option>
            <option value="*">Multiply</option>
            <option value="/">Divide</option>
        </select>
        <input type="number" name="num2" step="any" placeholder="Number 2" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error: Division by zero';
                }
                break;
            default:
                $result = 'Invalid Operation';
        }

        echo "<h2>Result</h2>";
        echo "<table>
                <tr><th>Number 1</th><td>$num1</td></tr>
                <tr><th>Operation</th><td>$operation</td></tr>
                <tr><th>Number 2</th><td>$num2</td></tr>
                <tr><th>Result</th><td>$result</td></tr>
              </table>";
    }
    ?>
</body>
</html>
