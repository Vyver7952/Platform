<?php

$hobi = $_POST["hobi"];

echo "<h1>DAFTAR HOBI YANG KUPILIH</h1>";
echo "<ol>";
foreach ($hobi as $h){
    echo "<li>$h";
}
echo "</ol>";
echo "<a href='latihan3.php'>kembali</a>";

?>