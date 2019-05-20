<?php

echo "<table>";

for($i = 1; $i <= 10; $i++) {
    echo "<tr>";

    for($j = 1; $j <= 10; $j++) {
        if ($i % 2 == 0 && $j % 2 == 2) {
            echo "<td>$j * $i = (" . $i * $j . ")</td>";
        } else if ($i % 2 !== 0 && $j % 2 !== 2) {
            echo "<td>$j * $i = [" . $i * $j . "]</td>";
        } else {
            echo "<td>$j * $i = " . $i * $j . "</td>";
        }
    }

    echo "</tr>";
}

echo "</table>";