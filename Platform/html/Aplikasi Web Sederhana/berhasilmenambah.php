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
        <h1>Barang sudah dimasukkan ke dalam keranjang</h1>
        <p>
            [ <a href="pilih.php">Pilih Barang</a> ]
            [ <a href="keranjang.php">Lihat Keranjang</a> ]
        </p>
    </div>
    <?php
    $_SESSION['listbarang'] = $_POST['barang'];
    ?>
</body>

</html>