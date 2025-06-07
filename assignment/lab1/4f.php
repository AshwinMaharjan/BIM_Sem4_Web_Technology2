<?php
echo "<table width='270px' cellspacing='0' cellpadding='0' border='1'>";

for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        // Calculate if the cell should be black or white
        $total = $row + $col;
        if ($total % 2 == 0) {
            echo "<td height='30px' width='30px' bgcolor='black'></td>"; 
        } else {
            echo "<td height='30px' width='30px' bgcolor='white'></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>
