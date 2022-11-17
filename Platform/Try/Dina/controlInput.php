<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gudang";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $produkid = $_POST['produkid'];
    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'];
    $jenis = $_POST['jenis'];
    $platform = $_POST['platform'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    if (isset($_POST['simpan'])) {
        $sql = "INSERT INTO stok_gudang (produkid, merk, tipe, jenis, platform, harga, jumlah) 
        VALUES ('$produkid', '$merk','$tipe', '$jenis ', '$platform', '$harga', '$jumlah')";
    } elseif (isset($_POST['update'])) {
        $sql = "UPDATE stok_gudang
        SET merk='$merk', tipe='$tipe', jenis='$jenis', platform='$platform', harga='$harga', jumlah='$jumlah'
        WHERE produkid='$produkid'";
    } elseif (isset($_POST['hapus'])) {
        $sql = "DELETE FROM stok_gudang WHERE produkid='$produkid'";
    }
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("location:tampilGudang.php");
?>