<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<table>
    <?php
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            $result = $i * $j;
            echo "<td>$i * $j = $result</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
