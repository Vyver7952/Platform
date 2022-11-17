<?php
session_start();

if (!isset($_SESSION['visit'])) {
    header('location:gagallogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="center">
        <h1>Isi Keranjang</h1>
        <p>
            [ <a class="logout" href="logout.php">Logout</a> ]
        </p>
    </div>
    <?php
    if (isset($_SESSION['listbarang'])) {
        $listBarang = $_SESSION['listbarang'];
        
        echo "<h3>Barang yang sudah Anda pilih</h3>";
        echo "<ol>";
        foreach ($listBarang as $barang) {
            echo "<li> $barang";
        }
        echo "</ol>";
    } else {
        echo "<h3>Keranjang Anda masih kosong</h3>";
    }
    ?>
    <br>
    <p>
        [ <a href="pilih.php">Pilih Barang</a> ]
    </p>
</body>

</html>