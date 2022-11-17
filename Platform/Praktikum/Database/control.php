<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gudang";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Membuat koneksi ke database 'gudang' dengan memasukan 'servername', 'username', dan 'password'

if ($conn->connect_error) { // Ditampilkan jika koneksi error atau gagal dibuat
    die("Connection Failed: " . $conn->connect_error);
}

// Membuat variable yang digunakan untuk menyimpan data dari form (inputjadwal.php)
$produkid = $_POST['produkid'];
$merk = $_POST['merk'];
$tipe = $_POST['tipe'];
$jenis = $_POST['jenis'];
$platform = $_POST['platform'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];


if (isset($_POST['simpan_btn'])) { // Dijalankan jika user mengclick tombol 'Simpan'
    $sql = "INSERT INTO stok_gudang (produkid, merk, tipe, jenis, platform, harga, jumlah) 
    VALUES ('$produkid', '$merk','$tipe', '$jenis ', '$platform', '$harga', '$jumlah')";
    // Query yang digunakan untuk menginputkan data ke dalam table 'stok_gudang' dengan cara memanggil semua nama kolom
    // dan setiap kolom akan diisikan dengan nilai yang didapatkan dari form sebelumnya yang telah disimpan
    // ke dalam variable

    if ($conn->query($sql) === FALSE) { // Ditampilkan jika query mengalami error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['update_btn'])) { // Dijalankan jika user mengclick tombol 'Update'
    $sql = "UPDATE stok_gudang
    SET merk='$merk', tipe='$tipe', jenis='$jenis', platform='$platform', harga='$harga', jumlah='$jumlah'
    WHERE produkid='$produkid'";
    // Query yang digunakan untuk mengupdate data yang ada di table 'stok_gudang' dengan mencari data berdasarkan Primary Key
    // (produkid) dan mengganti semua datanya dengan nilai yang didapatkan dari form sebelumnya yang telah disimpan ke dalam variable

    if ($conn->query($sql) === FALSE) { // Ditampilkan jika query mengalami error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['hapus_btn'])) { // Dijalankan jika user mengclick tombol 'Hapus'
    $sql = "DELETE FROM stok_gudang WHERE produkid='$produkid'";
    // Query yang digunakan untuk menghapus data dari sebuah table dengan menggunakan produkid (Primary Key)

    if ($conn->query($sql) === FALSE) { // Ditampilkan jika query mengalami error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); // Menutup koneksi ke database

header("location:tampil.php"); // Mengembalikan user ke halaman 'tampil.php'
