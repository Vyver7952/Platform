<?php

$suhu = [23, 45, 36, 27, 33, 32, 30, 28, 35, 32];
$count = 1;

echo "<table border=1px>";
foreach ($suhu as $s){
    echo "<tr>";
    echo "<td> Hari ke-$count";
    echo "<td>$s";
    $count++;
}
echo "</table>";

?>